
<?php

require(__DIR__ . "/../../partials/nav.php");
?>

<body id = 'dashboard'>
<h1>Dashboard</h1>
</body>



<form id='dashboardsearch' method="POST">
    <div>
        <label for="search">Search</label>
        <input id='dashboardbutton' type="text" name="search" placeholder="Search for Any Movie or Show..." required />
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
            echo '<form method="POST" action="add_to_watchlist.php" onsubmit="return checkForm()">';
            echo '<input type="submit" value="Add to Watchlist" id="dashboardaddbutton"/>';
            echo '<ul id="movies">';
            foreach ($data['d'] as $movie) {
                echo '<li>';
                echo '<input type="checkbox" name="movies[]" value="'. htmlspecialchars($movie["l"]) .'" />';
                if (isset($movie["y"])) {
                    echo '<input type="hidden" name="yearrelease[]" value="'. htmlspecialchars($movie["y"]) .'" />';
                }
                if (isset($movie["yr"])) {
                    echo '<input type="hidden" name="yearplayed[]" value="'. htmlspecialchars($movie["yr"]) .'" />';
                }
                if (isset($movie["qid"])) {
                    echo '<input type="hidden" name="type[]" value="'. htmlspecialchars($movie["qid"]) .'" />';
                }
                if (isset($movie["s"])) {
                    echo '<input type="hidden" name="famousactors[]" value="'. htmlspecialchars($movie["s"]) .'" />';
                }
                echo 'Title: ' . htmlspecialchars($movie["l"]), "<br>";
                if (isset($movie["i"]["imageUrl"])) {
                    echo '<img src="' . htmlspecialchars($movie["i"]["imageUrl"]) . '" alt="Movie Poster" style="max-width: 200px; max-height: 300px;">', "<br><br><br>";
                    echo '<input type="hidden" name="images[]" value="' . htmlspecialchars($movie["i"]["imageUrl"]) . '">';
                }
                echo '</li>';
            }
            echo '</ul>';
            echo '</form>';
        } else {
            echo 'No movies found.';
        }
    }
}


require(__DIR__ . "/../../partials/flash.php");

?>

<script>
    function checkForm() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
        if (!checkedOne) {
            flash('No movies selected. Please select a movie before adding to watchlist.', "danger");
            return false;
        }
        return true;
    }
</script>