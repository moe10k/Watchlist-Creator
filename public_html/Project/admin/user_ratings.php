<?php
require(__DIR__ . "/../../../partials/nav.php");
$db = getDB();

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "/home.php"));
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rating'])) {
    $user_id = $_POST['user_id'];
    $movie_title = $_POST['movie_title'];
    $rating = (int)$_POST['rating'];

   
    $query = "UPDATE Ratings SET rating = :rating WHERE user_id = :user_id AND movie_title = :movie_title";
    $stmt = $db->prepare($query);
    $stmt->execute([":rating" => $rating, ":user_id" => $user_id, ":movie_title" => $movie_title]);
    flash('Rating updated successfully!', 'success');
}


$query = "SELECT Ratings.user_id, Users.username, Ratings.movie_title, Ratings.rating 
          FROM Ratings 
          JOIN Users ON Ratings.user_id = Users.id 
          ORDER BY Users.username ASC, Ratings.movie_title ASC";
$stmt = $db->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>All User Ratings</h1>
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
                        <input type="number" name="rating" min="1" max="10" value="<?php echo htmlspecialchars($row['rating']); ?>" required>
                        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($row['user_id']); ?>">
                        <input type="hidden" name="movie_title" value="<?php echo htmlspecialchars($row['movie_title']); ?>">
                        <input type="submit" value="Update">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
