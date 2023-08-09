<?php
require(__DIR__ . "/../../../partials/nav.php");
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "/home.php"));
}

$db = getDB();
$movies = [];
$users = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $movieSearchTerm = isset($_POST['movie-search']) ? $_POST['movie-search'] : '';
    $queryMovies = "SELECT DISTINCT movie_title, image_url FROM Watchlist WHERE movie_title LIKE :term";                    // mk42-8/8 - Search for movies
    $stmtMovies = $db->prepare($queryMovies);
    $stmtMovies->execute([':term' => '%' . $movieSearchTerm . '%']);
    $movies = $stmtMovies->fetchAll(PDO::FETCH_ASSOC);

    
    $userSearchTerm = isset($_POST['user-search']) ? $_POST['user-search'] : '';                                            // mk42-8/8 - Search for users
    $queryUsers = "SELECT id, username FROM Users WHERE username LIKE :term";
    $stmtUsers = $db->prepare($queryUsers);
    $stmtUsers->execute([':term' => '%' . $userSearchTerm . '%']);
    $users = $stmtUsers->fetchAll(PDO::FETCH_ASSOC);

    
    if (isset($_POST['selected-movie'], $_POST['selected-user'])) {                                                         // mk42-8/8 - adding to recommended watchlist
        $selectedMovies = $_POST['selected-movie'];
        $selectedUsers = $_POST['selected-user'];

        foreach ($selectedMovies as $selectedMovieJson) {
            $selectedMovie = json_decode($selectedMovieJson, true);
            foreach ($selectedUsers as $selectedUser) {
                
                $queryAdd = "INSERT INTO Watchlist (user_id, movie_title, image_url, recommended) VALUES (:user_id, :movie_title, :image_url, 1)";
                $stmtAdd = $db->prepare($queryAdd);
                $stmtAdd->execute([
                    ':user_id' => $selectedUser,
                    ':movie_title' => $selectedMovie['movie_title'],
                    ':image_url' => $selectedMovie['image_url']
                ]);
            }
        }
        flash("Movies added to recommended watchlists successfully!", "success");
    }
}
?>

<h1>Recommend Movies to Users</h1>

<form method="POST">
    <label for="movie-search">Search Movie:</label>
    <input id="movie-search" name="movie-search" type="text">
    <label for="user-search">Search User:</label>
    <input id="user-search" name="user-search" type="text">
    <input type="submit" value="Search">
</form>

<form method="POST">
    <h2>Movies</h2>
    <div class="assignmoviescontainer">
        <div class="column movies">
            <?php foreach ($movies as $movie): ?>
                <div class="movie">
                    <input type="checkbox" name="selected-movie[]" value="<?php echo htmlspecialchars(json_encode($movie)); ?>">
                    <p><?php echo htmlspecialchars($movie['movie_title']); ?></p>
                    <img src="<?php echo htmlspecialchars($movie['image_url']); ?>" alt="Movie Poster" style="max-width: 200px; max-height: 300px;">
                </div>
            <?php endforeach; ?>
        </div>

        <div class="column users">
            <h2>Users</h2>
            <?php foreach ($users as $user): ?>
                <div class="user">
                    <input type="checkbox" name="selected-user[]" value="<?php echo htmlspecialchars($user['id']); ?>">
                    <p><?php echo htmlspecialchars($user['username']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

            <input type="submit" value="Add to Recommended">
</form>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>
