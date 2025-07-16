<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<div class="container">
    <div id="home">
        <h1>Welcome to Your Movie Watchlist</h1>
        
        <div class="homecontainer">
            <h2>Track, Rate, and Discover Movies</h2>
            
            <?php if (is_logged_in()): ?>
                <p>Hello, <?php echo get_username(); ?>! Ready to manage your movie collection?</p>
            <?php endif; ?>
            
            <div class="features-grid">
                <div class="feature-card">
                    <h3>Search Movies</h3>
                    <p>Find movies from our extensive database and add them to your watchlist.</p>
                    <a href="<?php echo get_url('dashboard.php'); ?>" class="btn">Go to Dashboard</a>
                </div>
                
                <div class="feature-card">
                    <h3>Manage Watchlist</h3>
                    <p>View, organize, and remove movies from your personal watchlist.</p>
                    <a href="<?php echo get_url('watchlist.php'); ?>" class="btn">View Watchlist</a>
                </div>
                
                <div class="feature-card">
                    <h3>Rate Movies</h3>
                    <p>Rate movies you've watched and share your opinions.</p>
                    <a href="<?php echo get_url('user_ratings2.php'); ?>" class="btn">My Ratings</a>
                </div>
                
                <div class="feature-card">
                    <h3>Discover</h3>
                    <p>Get personalized movie recommendations based on your ratings.</p>
                    <a href="<?php echo get_url('recommended.php'); ?>" class="btn">Recommendations</a>
                </div>
            </div>
            
            <h3>Getting Started</h3>
            <ul class="instructions">
                <li>Search for movies using the Dashboard</li>
                <li>Add interesting movies to your Watchlist</li>
                <li>Rate movies after watching them</li>
                <li>Check your Recommended tab for personalized suggestions</li>
                <li>Update your profile settings anytime</li>
            </ul>
        </div>
    </div>
</div>

<style>
.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0;
}

.feature-card {
    background-color: #fff;
    border-radius: 8px;
    padding: 1.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
}

.feature-card h3 {
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.btn {
    display: inline-block;
    background-color: var(--primary-color);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    margin-top: 1rem;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: var(--accent-color);
    text-decoration: none;
    color: white;
}
</style>

<?php require(__DIR__ . "/../../partials/flash.php"); ?>