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

$user_id = get_user_id(); 
$db = getDB();  

if (isset($_POST["remove_movies"])) {
    $movies_to_remove = $_POST["remove_movies"];
    
    $inQuery = implode(',', array_fill(0, count($movies_to_remove), '?'));
    array_unshift($movies_to_remove, $user_id);
    $stmt = $db->prepare("DELETE FROM Watchlist WHERE user_id = ? AND movie_title IN ($inQuery)");
    
    $stmt->execute($movies_to_remove);
}


$stmt = $db->prepare("SELECT movie_title, image_url FROM Watchlist WHERE user_id = ?");
$stmt->execute([$user_id]);

$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($movies) {
    echo '<form method="POST" action="remove_from_watchlist.php" onsubmit="return checkForm()">';
    echo '<ul id = "watchlist-content">';
    foreach ($movies as $movie) {
        echo '<li>';
        echo '<input type="checkbox" name="remove_movies[]" value="' . htmlspecialchars($movie["movie_title"]) . '">';
        echo '<h2 class="movie-title">' . htmlspecialchars($movie["movie_title"]), "<br>";
        if ($movie["image_url"]) {
            echo '<img src="' . htmlspecialchars($movie["image_url"]) . '" alt="Movie Poster" style="max-width: 200px; max-height: 300px;">', "<br><br><br>";
        }
        echo '</li>';
    }
    echo '</ul>';
    echo '<input type="submit" value="Remove Selected Movies">';
    echo '</form>';
} else {
    echo 'No movies in your watchlist.';
}
?>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>


<script>
    function checkForm() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
        if (!checkedOne) {
            flash('No movies selected. Please select a movie before removing from watchlist.');
            return false; 
        }
        return true; 
    }
</script>