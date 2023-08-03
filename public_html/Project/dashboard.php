
<?php

require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Dashboard</h1>


<form method="POST">
    <div>
        <label for="search">Search</label>
        <input type="text" name="search" required />
    </div>
    <input type="submit" value="Search" />
</form>

<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>

<?php
if (isset($_POST['search'])) {
    $searchTerm = urlencode($_POST['search']); 

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/auto-complete?q=" . $searchTerm,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
            "X-RapidAPI-Key: 5ad49cae09msh9ca2d0578e8a801p168e63jsnbc6c9895684c"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $data = json_decode($response, true);

        if (isset($data['d'])) {
            echo '<form method="POST" action="add_to_watchlist.php">';
            echo '<ul>';
            foreach ($data['d'] as $movie) {
                echo '<li>';
                echo '<input type="checkbox" name="movies[]" value="'. htmlspecialchars($movie["l"]) .'" />';
                echo 'Title: ' . htmlspecialchars($movie["l"]), "<br>";
                if (isset($movie["i"]["imageUrl"])) {
                    echo '<img src="' . htmlspecialchars($movie["i"]["imageUrl"]) . '" alt="Movie Poster" style="max-width: 200px; max-height: 300px;">', "<br><br><br>";
                    echo '<input type="hidden" name="images[]" value="' . htmlspecialchars($movie["i"]["imageUrl"]) . '">';
                }
                echo '</li>';
            }
            echo '</ul>';
            echo '<input type="submit" value="Add to Watchlist" />';
            echo '</form>';
        } else {
            echo 'No movies found.';
        }
    }
}

require(__DIR__ . "/../../partials/flash.php");

?>