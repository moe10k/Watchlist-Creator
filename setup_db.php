<?php
// Turn on error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$dbhost = "localhost";
$dbuser = "root";
// Replace with your actual MySQL password - the one you used in the successful connection test
$dbpass = "Hashem123!"; // If you're using an empty password, leave this as an empty string
$dbdatabase = "watch_list";

echo "<h1>Database Setup Script</h1>";

try {
    // Create PDO connection
    $dsn = "mysql:host=$dbhost;charset=utf8mb4";
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<p>Connected to MySQL successfully!</p>";
    
    // Create database if it doesn't exist
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbdatabase`");
    echo "<p>Database '$dbdatabase' created or already exists.</p>";
    
    // Select the database
    $pdo->exec("USE `$dbdatabase`");
    echo "<p>Using database '$dbdatabase'.</p>";
    
    // Get SQL files in order
    $sqlFiles = glob(__DIR__ . "/public_html/Project/sql/*.sql");
    sort($sqlFiles);
    
    echo "<p>Found " . count($sqlFiles) . " SQL files to import.</p>";
    
    // Execute each SQL file
    foreach ($sqlFiles as $file) {
        $filename = basename($file);
        echo "<p>Importing $filename...</p>";
        
        $sql = file_get_contents($file);
        $pdo->exec($sql);
        
        echo "<p>Successfully imported $filename.</p>";
    }
    
    echo "<h2>Database setup completed successfully!</h2>";
    echo "<p>You can now <a href='http://localhost:8000/'>access the application</a>.</p>";
    
} catch (PDOException $e) {
    echo "<h2>Error:</h2>";
    echo "<p>" . $e->getMessage() . "</p>";
}
?> 