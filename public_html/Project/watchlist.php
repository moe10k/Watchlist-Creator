<?php
require(__DIR__ . "/../../partials/nav.php");

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

$order = "DESC"; // default order
if (isset($_POST['filter'])) {
    if ($_POST['filter'] == "oldest") {
        $order = "ASC"; 
    }
}

$limit = 10; // default limit
if (isset($_POST['limit']) && is_numeric($_POST['limit']) && $_POST['limit'] > 0) {
    $limit = (int)$_POST['limit']; 
    flash("Showing $limit movies", "success");
}

if ($limit < 1 || $limit > 100) {
    flash('Not within range of 1-100', 'warning'); //mk42 - 8/7 - server side validation to default limit to 10
    $limit = 10;
}

$query = "SELECT movie_title, image_url FROM Watchlist WHERE user_id = :user_id ORDER BY created $order LIMIT $limit";
$stmt = $db->prepare($query);
$stmt->execute([":user_id" => $user_id]);
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

$userQuery = "SELECT username FROM Users WHERE id = :user_id";
$userStmt = $db->prepare($userQuery);
$userStmt->execute([":user_id" => $user_id]);
$username = $userStmt->fetchColumn();


$countQuery = "SELECT COUNT(*) FROM Watchlist WHERE user_id = :user_id";
$stmt = $db->prepare($countQuery);
$stmt->execute([":user_id" => $user_id]);
$totalMovies = $stmt->fetchColumn();
echo "<h1 id='watchlisttitle'>$username's Watchlist (Total: $totalMovies)</h1>";



?>

<form method="POST" id="filterForm">
    <label for="filter">Sort:</label>
    <select id="filter" name="filter">
        <option value="newest" <?php echo $order=="DESC"?'selected':''; ?>>Newest First</option>
        <option value="oldest" <?php echo $order=="ASC"?'selected':''; ?>>Oldest First</option>
    </select>
    <label for="limit">Show:</label>
    <input id="limit" name="limit" type="number" value="<?php echo $limit; ?>">
    <input type="submit" value="Apply Filter">
</form>

<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}

if ($movies) {
    echo '<h1 class="movie-title">Movies</h1>';
    echo '<form id="watchlist-form" method="POST" onsubmit="return checkForm()">';
    echo '<div id="watchlist-content">';
    echo '<ul>';
    foreach ($movies as $movie) {
        echo '<li>';
        echo '<input type="checkbox" name="remove_movies[]" value="' . htmlspecialchars($movie["movie_title"]) . '">';
        echo '<h2 class="movie-title">' . htmlspecialchars($movie["movie_title"]) . '</h2>';
        if ($movie["image_url"]) {
            echo '<img src="' . htmlspecialchars($movie["image_url"]) . '" alt="Movie Poster" style="max-width: 200px; max-height: 300px;">';
            echo '<a href="movie_details.php?movie_title=' . urlencode($movie['movie_title']) . '">View Details</a>';
        }

        echo '<label for="rating-' . htmlspecialchars($movie["movie_title"]) . '">Rate:</label>';
        echo '<input type="number" name="rating[' . htmlspecialchars($movie["movie_title"]) . ']" min="1" max="10" id="rating-' . htmlspecialchars($movie["movie_title"]) . '">';
        echo '<button type="button" onclick="submitRating(\'' . htmlspecialchars($movie["movie_title"]) . '\')">Submit Rating</button>';
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
    echo '<input type="submit" value="Remove Selected Movies">';
    echo '</form>';
} else {
    echo 'No movies in your watchlist.';
}

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

    document.getElementById('filterForm').addEventListener('submit', function(event) {
    var limitInput = document.getElementById('limit');
    if (limitInput.value < 1) {
        event.preventDefault();
        flash('Please enter a positive number that is greater than 0', "danger");
    }
});

function submitRating(movieTitle) {
    var rating = document.getElementById('rating-' + movieTitle).value;
    
    if (rating < 1 || rating > 10) {
        flash('Rating must be between 1 and 10', 'warning');
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'save_ratings.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            flash('Rating saved successfully!', 'success');
        }
    };

    var params = 'movie_title=' + encodeURIComponent(movieTitle) + '&rating=' + encodeURIComponent(rating);
    xhr.send(params);
}
</script>
