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
    <li>Search for Movies</li>
    <li>Add to your Watchlist</li>
    <li>Find out any info you want from a wide range of movies!</li>
</ul>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>