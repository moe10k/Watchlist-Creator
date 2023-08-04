<?php
require(__DIR__ . "/../../partials/nav.php");
?>


<h1>Home</h1>
<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<ul>
    <li>Make a List of Movies you want to Watch and Find out more about!</li>
    <li>Search for Movies under Dashboard</li>
    <li>Select and Add Movies to your Watchlist</li>
</ul>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>