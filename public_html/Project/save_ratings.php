<?php

require(__DIR__ . "/../../partials/nav.php");

if (isset($_POST['rating']) && isset($_POST['movie_title'])) {
    $user_id = get_user_id();
    $db = getDB();
    
    $rating = (int)$_POST['rating'];
    $movie_title = $_POST['movie_title'];

  
    if ($rating >= 1 && $rating <= 10) {
       
        $stmt = $db->prepare("SELECT * FROM Ratings WHERE user_id = :user_id AND movie_title = :movie_title");
        $stmt->execute([":user_id" => $user_id, ":movie_title" => $movie_title]);
        $existingRating = $stmt->fetch(PDO::FETCH_ASSOC);

    
        if ($existingRating) {
            $stmt = $db->prepare("UPDATE Ratings SET rating = :rating WHERE user_id = :user_id AND movie_title = :movie_title");
        } else {
            $stmt = $db->prepare("INSERT INTO Ratings (user_id, movie_title, rating) VALUES (:user_id, :movie_title, :rating)");
        }
        
        $stmt->execute([":user_id" => $user_id, ":movie_title" => $movie_title, ":rating" => $rating]);
        flash('Rating saved successfully!', 'success');
    } else {
        flash('Rating must be between 1 and 10', 'danger');
    }
}

// Redirect back to the watchlist
header("Location: watchlist.php");
exit;

?>
