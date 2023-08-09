<?php
require(__DIR__ . "/../../../partials/nav.php");
$db = getDB();

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "/home.php"));
}




$db = getDB();

$order = "ASC"; // Default order
$limit = 10; // Default limit

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['sort']) && $_POST['sort'] == "desc") {
        $order = "DESC";
    }
    if (isset($_POST['limit']) && is_numeric($_POST['limit']) && $_POST['limit'] > 0 && $_POST['limit'] <= 100) {
        $limit = (int)$_POST['limit'];
    }
}

$query = "SELECT movie_title, MAX(image_url) as image_url FROM Watchlist GROUP BY movie_title ORDER BY movie_title $order LIMIT $limit";
$stmt = $db->prepare($query);
$stmt->execute();
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

$movieCount = count($movies);                                                                                               //mk42-8/8-counts all the movies on the screen - updates when filter is applied

?>


<form method="POST">
    <label for="sort">Sort Movies:</label>
    <select id="sort" name="sort">
        <option value="asc" <?php echo $order=="ASC"?'selected':''; ?>>Alphabetically</option>
        <option value="desc" <?php echo $order=="DESC"?'selected':''; ?>>Reverse Alphabetically</option>
    </select>
    <label for="limit">Show:</label>
    <input id="limit" name="limit" type="number" min="1" max="100" value="<?php echo $limit; ?>">
    <input type="submit" value="Apply">
</form>



<h1>All Movies in User's Watchlists</h1>
<h1>Total Movies: <?php echo $movieCount; ?></h1>

<div id="movies-container">
    <?php foreach ($movies as $movie): ?>
        <div class="movie">
            <h2><?php echo htmlspecialchars($movie['movie_title']); ?></h2>
            <?php if ($movie['image_url']): ?>
                <img src="<?php echo htmlspecialchars($movie['image_url']); ?>" alt="Movie Poster" style="max-width: 200px; max-height: 300px;">
                <div class="details-link">
                    <a href="../movie_details.php?movie_title=<?php echo urlencode($movie['movie_title']); ?>">View Details</a>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>