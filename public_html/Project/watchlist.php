<?php
require(__DIR__ . "/../../partials/nav.php");
?>


<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}

$user_id = get_user_id(); 
$db = getDB();  

if (isset($_POST["remove_movies"])) {
    $movies_to_remove = $_POST["remove_movies"];
    flash('Movie Successfully Removed', "success");
    
    $inQuery = implode(',', array_fill(0, count($movies_to_remove), '?'));
    array_unshift($movies_to_remove, $user_id);
    $stmt = $db->prepare("DELETE FROM Watchlist WHERE user_id = ? AND movie_title IN ($inQuery)");
    
    $stmt->execute($movies_to_remove);
}


$stmt = $db->prepare("SELECT movie_title, image_url FROM Watchlist WHERE user_id = ?");
$stmt->execute([$user_id]);

$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($movies) {
    echo '<h1 class="watchlist-title">My Watchlist</h1>';
    echo '<form id="watchlist-form" method="POST" onsubmit="return checkForm()">';
    echo '<div id="watchlist-content">';
    echo '<ul>';
    foreach ($movies as $movie) {
        echo '<li>';
        echo '<input type="checkbox" name="remove_movies[]" value="' . htmlspecialchars($movie["movie_title"]) . '">';
        echo '<h2 class="movie-title">' . htmlspecialchars($movie["movie_title"]) . '</h2>';
        if ($movie["image_url"]) {
            echo '<img src="' . htmlspecialchars($movie["image_url"]) . '" alt="Movie Poster" style="max-width: 200px; max-height: 300px;"><br><br><br>';
        }
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
    echo '<input type="submit" value="Remove Selected Movies">';
    echo '</form>';
} else {
    echo 'No movies in your watchlist.';
}
?>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>


<script>
    function checkForm() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
        if (!checkedOne) {
            flash('No movies selected. Please select a movie before removing from watchlist.', "danger");
            return false; 
        }
        return true;
    }
</script>