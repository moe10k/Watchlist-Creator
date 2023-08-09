<?php
require(__DIR__ . "/../../partials/nav.php");
?>


<body id="home">
    <div class="homecontainer">
        <h1 id="homeh1">Home</h1>
        <?php
        if (is_logged_in(true)) {
            //comment this out if you don't want to see the session variables
            error_log("Session data: " . var_export($_SESSION, true));
        }
        ?>
        <ul class="instructions">
            <li>Make a List of Movies you want to Watch and Find out more about!</li>
            <li>Search for Movies under Dashboard</li>
            <li>Select and Add Movies to your Watchlist</li>
            <li>Rate Movies and Share with Others</li>
            <li>Take a Look at Your Recommended Tab for suprises from the Admin</li>
        </ul>
    </div>
    <?php require(__DIR__ . "/../../partials/flash.php"); ?>
</body>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>