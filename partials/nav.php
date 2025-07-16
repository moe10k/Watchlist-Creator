<?php
require_once(__DIR__ . "/../lib/functions.php");
//Note: this is to resolve cookie issues with port numbers
$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
    $domain = explode(":", $domain)[0];
}
$localWorks = true; //some people have issues with localhost for the cookie params
//if you're one of those people make this false

//this is an extra condition added to "resolve" the localhost issue for the session cookie
if (($localWorks && $domain == "localhost") || $domain != "localhost") {
    session_set_cookie_params([
        "lifetime" => 60 * 60,
        "path" => "$BASE_PATH",
        //"domain" => $_SERVER["HTTP_HOST"] || "localhost",
        "domain" => $domain,
        "secure" => true,
        "httponly" => true,
        "samesite" => "lax"
    ]);
}
session_start();
?>
<!-- include css and js files -->
<link rel="stylesheet" href="<?php echo get_url('styles.css'); ?>">
<script src="<?php echo get_url('helpers.js'); ?>"></script>

<nav class="navbar">
    <div class="navbar-brand">
        <a href="<?php echo get_url('home.php'); ?>">Movie Watchlist</a>
    </div>
    <div class="navbar-menu">
        <?php if (is_logged_in()) : ?>
            <div class="navbar-start">
                <a href="<?php echo get_url('home.php'); ?>" class="navbar-item">Home</a>
                <a href="<?php echo get_url('dashboard.php'); ?>" class="navbar-item">Dashboard</a>
                <a href="<?php echo get_url('watchlist.php'); ?>" class="navbar-item">Watchlist</a>
                <a href="<?php echo get_url('user_ratings2.php'); ?>" class="navbar-item">Ratings</a>
                <a href="<?php echo get_url('recommended.php'); ?>" class="navbar-item">Recommended</a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item has-dropdown">
                    <a class="navbar-link">
                        <?php echo get_username(); ?>
                    </a>
                    <div class="navbar-dropdown">
                        <a href="<?php echo get_url('profile.php'); ?>" class="navbar-item">Profile</a>
                        <?php if (has_role("Admin")) : ?>
                            <hr class="navbar-divider">
                            <a href="<?php echo get_url('admin/all_movies.php'); ?>" class="navbar-item">Movies</a>
                            <a href="<?php echo get_url('admin/assign_movies.php'); ?>" class="navbar-item">Assign Movies</a>
                            <a href="<?php echo get_url('admin/create_role.php'); ?>" class="navbar-item">Create Role</a>
                            <a href="<?php echo get_url('admin/list_roles.php'); ?>" class="navbar-item">List Roles</a>
                            <a href="<?php echo get_url('admin/assign_roles.php'); ?>" class="navbar-item">Assign Roles</a>
                        <?php endif; ?>
                        <hr class="navbar-divider">
                        <a href="<?php echo get_url('logout.php'); ?>" class="navbar-item">Logout</a>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="navbar-end">
                <a href="<?php echo get_url('login.php'); ?>" class="navbar-item">Login</a>
                <a href="<?php echo get_url('register.php'); ?>" class="navbar-item">Register</a>
            </div>
        <?php endif; ?>
    </div>
</nav>