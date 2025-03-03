<?php
require(__DIR__ . "/../../partials/nav.php");
?>


<h1>More Details</h1>
<?php
$movie_title = $_GET['movie_title']; // Assuming you're using a unique movie ID
$user_id = get_user_id();

$db = getDB();
$stmt = $db->prepare("SELECT * FROM Watchlist WHERE user_id = :user_id AND movie_title = :movie_title");
$stmt->execute([":user_id" => $user_id, ":movie_title" => $movie_title]);
$movie = $stmt->fetch(PDO::FETCH_ASSOC);

if ($movie) {
    echo "<h1>" . htmlspecialchars($movie['movie_title']) . "</h1>";
    echo "<img src='" . htmlspecialchars($movie['image_url']) . "' alt='Movie Poster'>";
    if (isset($movie['year_release']) && $movie['year_release'] !== null) {
        echo "<p>Release Year: " . htmlspecialchars($movie['year_release']) . "</p>";
    }
    
    if (isset($movie['year_played']) && $movie['year_played'] !== null) {
        echo "<p>Years Played: " . htmlspecialchars($movie['year_played']) . "</p>";
    }
    if (isset($movie['type']) && $movie['type'] !== null) {
        echo "<p>Type: " . htmlspecialchars($movie['type']) . "</p>";
    }
    if (isset($movie['famous_actors']) && $movie['famous_actors'] !== null) {
        echo "<p>Famous Actor(s): " . htmlspecialchars($movie['famous_actors']) . "</p>";
    }
    // ... other details ...
} else {
    echo "Movie not found.";
}
?>
