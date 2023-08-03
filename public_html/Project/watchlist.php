<?php

require(__DIR__ . "/../../partials/nav.php");
?>


<div id="watchlist-page-body">
<h1>Watchlist</h1>
<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}

$user_id = get_user_id();  // Assuming you have a function get_user_id() to retrieve the current logged in user ID
$db = getDB();  // Assuming getDB() is a function that returns a PDO instance

$stmt = $db->prepare("SELECT movie_title, image_url FROM Watchlist WHERE user_id = :user_id");
$stmt->execute([":user_id" => $user_id]);

$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($movies) {
    echo '<ul id = "watchlist-content">';
    foreach ($movies as $movie) {
        echo '<li>';
        echo '<h2 class="movie-title">' . htmlspecialchars($movie["movie_title"]), "<br>";
        if ($movie["image_url"]) {
            echo '<img src="' . htmlspecialchars($movie["image_url"]) . '" alt="Movie Poster" style="max-width: 200px; max-height: 300px;">', "<br><br><br>";
        }
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo 'No movies in your watchlist.';
}
?>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>
