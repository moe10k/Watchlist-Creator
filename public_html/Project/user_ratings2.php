<?php
require(__DIR__ . "/../../partials/nav.php");
$db = getDB();



$total_ratings_query = "SELECT COUNT(*) as total_ratings FROM Ratings";                     //mk42 - 8/8 - fetches ratings from table
$total_ratings_stmt = $db->prepare($total_ratings_query);
$total_ratings_stmt->execute();
$total_ratings_row = $total_ratings_stmt->fetch(PDO::FETCH_ASSOC);
$total_ratings = $total_ratings_row['total_ratings'];

$username_filter = "";
$limit = 10;                                                                                 //mk42 - 8/8 -  Default limit is set to 10 for the filter

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['username'])) {
        $username_filter = $_GET['username'];
    }
    if (isset($_GET['limit']) && $_GET['limit'] >= 1 && $_GET['limit'] <= 100) {
        $limit = (int)$_GET['limit'];
    }
}

$query = "SELECT Ratings.user_id, Users.username, Ratings.movie_title, Ratings.rating 
          FROM Ratings 
          JOIN Users ON Ratings.user_id = Users.id";

if ($username_filter) {
    $query .= " WHERE Users.username LIKE :username";
}

$query .= " ORDER BY Users.username ASC, Ratings.movie_title ASC";
$query .= " LIMIT " . $limit; 
$stmt = $db->prepare($query);

if ($username_filter) {
    $stmt->execute([":username" => "%$username_filter%"]);
} else {
    $stmt->execute();
}

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
require(__DIR__ . "/../../partials/flash.php");
?>

<form action="" method="get">
    <label for="username">Search by Username:</label>
    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username_filter); ?>">      <!-- mk42 - 8/8 - filter/sort search by username -->
    
    <label for="limit">Show Reviews:</label>
    <input type="number" id="limit" name="limit" min="1" max="100" value="<?php echo $limit; ?>">                    <!-- mk42 - 8/8 - filter/sort by number of ratings seen at once -->
    
    <input type="submit" value="Search">
</form>


<h1>All User Ratings</h1>
<p id='watchlisttitle'>Total Ratings Submitted: <?php echo $total_ratings; ?></p>
<table id='movie-table'>
    <thead>
        <tr>
            <th>User</th>
            <th>Movie</th>
            <th>Rating</th>
            <th>ADMIN Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['username']); ?></td>
                <td><?php echo htmlspecialchars($row['movie_title']); ?></td>
                <td><?php echo htmlspecialchars($row['rating']); ?>/10</td>
                <td>
                    <form action="" method="post">
                        <input type="number" name="rating" min="1" max="10" value="<?php echo htmlspecialchars($row['rating']); ?>" required <?php if (!has_role("Admin")) echo 'readonly'; ?>>
                        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($row['user_id']); ?>">
                        <input type="hidden" name="movie_title" value="<?php echo htmlspecialchars($row['movie_title']); ?>">
                        <?php if (has_role("Admin")): ?>
                            <input type="submit" value="Update">
                        <?php else: ?>
                            <!-- You can either hide the button or display a disabled button for non-admin users -->
                        <?php endif; ?>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
