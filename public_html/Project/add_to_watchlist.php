<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    flash("You must be logged in to add to your watchlist");
    die(header("Location: login.php"));
}

if (isset($_POST["movies"]) && isset($_POST["images"]) && isset($_POST["yearrelease"]) && isset($_POST["yearplayed"]) && isset($_POST["type"]) && isset($_POST["famousactors"])) { //this creates variables out of the data saved
    $user_id = get_user_id();                                                                                                                                                      //in dashboard.php
    $movies = $_POST["movies"];
    $images = $_POST["images"];
    $yearrelease = $_POST["yearrelease"];
    $yearplayed = $_POST["yearplayed"];
    $type = $_POST["type"];
    $famousactors = $_POST["famousactors"];
    
    $db = getDB();

    for ($i = 0; $i < count($movies); $i++) {
        $stmt = $db->prepare("SELECT 1 FROM Watchlist WHERE user_id = :user_id AND movie_title = :movie_title");
        $stmt->execute([":user_id" => $user_id, ":movie_title" => $movies[$i]]);
        $exists = $stmt->fetchColumn();

        if ($exists) {
            flash("'$movies[$i]' is already in your watchlist.", 'warning');
        } else {
            $stmt = $db->prepare("INSERT INTO Watchlist (user_id, movie_title, image_url, year_release, year_played, type, famous_actors) VALUES (:user_id, :movie_title, :image_url, :year_release, :year_played, :type, :famous_actors)");
            $r = $stmt->execute([
                ":user_id" => $user_id,
                ":movie_title" => $movies[$i],
                ":image_url" => $images[$i],
                ":year_release" => $yearrelease[$i],
                ":year_played" => $yearplayed[$i],
                ":type" => $type[$i],
                ":famous_actors" => $famousactors[$i]
            ]);

            if (!$r) {
                flash("There was a problem saving '$movies[$i]'. Please try again.", 'danger');
            } else {
                flash("'$movies[$i]' added to watchlist.", 'success');
            }
        }
    }

    // Redirect back to dashboard after processing, may remove this later on
    die(header("Location: watchlist.php"));
}
?>
