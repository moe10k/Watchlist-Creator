<?php
// Try to load from .env file
$ini = @parse_ini_file(__DIR__ . "/../.env");

if($ini && isset($ini["DB_URL"])){
    // Load local .env file
    $url = $ini["DB_URL"];
    $db_url = parse_url($url);
    
    // Verify that parse_url worked correctly
    if ($db_url && isset($db_url["host"]) && isset($db_url["user"]) && isset($db_url["pass"]) && isset($db_url["path"])) {
        $dbhost = $db_url["host"];
        $dbuser = $db_url["user"];
        $dbpass = $db_url["pass"];
        $dbdatabase = substr($db_url["path"], 1);
    } else {
        // Fallback to regex parsing if parse_url fails
        $matches = [];
        $pattern = "/mysql:\/\/(\w+):(\w+)@([^:]+):(\d+)\/(\w+)/i";
        if (preg_match($pattern, $url, $matches) && count($matches) >= 6) {
            $dbhost = $matches[3];
            $dbuser = $matches[1];
            $dbpass = $matches[2];
            $dbdatabase = $matches[5];
        } else {
            // If regex also fails, load direct configuration
            require_once(__DIR__ . "/db_config.php");
        }
    }
} else {
    // If .env file not found, try environment variables
    $url = getenv("DB_URL");
    if ($url) {
        $db_url = parse_url($url);
        if ($db_url && isset($db_url["host"]) && isset($db_url["user"]) && isset($db_url["pass"]) && isset($db_url["path"])) {
            $dbhost = $db_url["host"];
            $dbuser = $db_url["user"];
            $dbpass = $db_url["pass"];
            $dbdatabase = substr($db_url["path"], 1);
        } else {
            // Fallback to direct configuration
            require_once(__DIR__ . "/db_config.php");
        }
    } else {
        // If environment variable not found, load direct configuration
        require_once(__DIR__ . "/db_config.php");
    }
}

// Ensure all required variables are set
if (!isset($dbhost) || !isset($dbuser) || !isset($dbpass) || !isset($dbdatabase)) {
    error_log("Database configuration is incomplete. Check your .env file or db_config.php.");
    // Set default values as a last resort
    $dbhost = $dbhost ?? "localhost";
    $dbuser = $dbuser ?? "root";
    $dbpass = $dbpass ?? "password";
    $dbdatabase = $dbdatabase ?? "watch_list";
}
?>
