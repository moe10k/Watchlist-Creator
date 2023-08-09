<?php
require(__DIR__ . "/../../partials/nav.php");

$user_id = get_user_id(); // Assuming you have a function to get the logged-in user's ID

$db = getDB();
$query = "SELECT movie_title, image_url FROM Watchlist WHERE user_id = :user_id AND recommended = 1";
$stmt = $db->prepare($query);
$stmt->execute([':user_id' => $user_id]);
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Your Recommended Movies</h1>
<div id="movies-container">
    <?php foreach ($movies as $movie): ?>
        <div class="movie">
            <h2><?php echo htmlspecialchars($movie['movie_title']); ?></h2>
            <?php if ($movie['image_url']): ?>
                <img src="<?php echo htmlspecialchars($movie['image_url']); ?>" alt="Movie Poster" style="max-width: 200px; max-height: 300px;">
                <div class="details-link">
                    <a href="movie_details.php?movie_title=<?php echo urlencode($movie['movie_title']); ?>">View Details</a>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
