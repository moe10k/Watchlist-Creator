<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    flash("You must be logged in to add to your watchlist");
    die(header("Location: login.php"));
}

if (isset($_POST["movies"]) && isset($_POST["images"])) {
    $movies = $_POST["movies"];
    $images = $_POST["images"];
    
    $user_id = get_user_id(); // This function should return the id of the currently logged in user

    $db = getDB();

    for ($i = 0; $i < count($movies); $i++) {
        $stmt = $db->prepare("INSERT INTO Watchlist (user_id, movie_title, image_url) VALUES (:user_id, :movie_title, :image_url)");

        $r = $stmt->execute([
            ":user_id" => $user_id,
            ":movie_title" => $movies[$i],
            ":image_url" => $images[$i]
        ]);

        if (!$r) {
            flash("There was a problem saving your movie. Please try again.");
        }
    }

    flash("Movies successfully added to watchlist");
    die(header("Location: watchlist.php"));
}
?>

