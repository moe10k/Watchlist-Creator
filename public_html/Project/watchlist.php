<?php
require(__DIR__ . "/../../partials/nav.php");

$user_id = get_user_id();
$db = getDB();

if (isset($_POST["remove_movies"])) {
    $movies_to_remove = $_POST["remove_movies"];
    $stmt = $db->prepare("DELETE FROM Watchlist WHERE user_id = ? AND movie_title = ?"); 

    foreach ($movies_to_remove as $movie_title) {
        $stmt->execute([$user_id, $movie_title]);
        flash("Movie Successfully Removed: " . htmlspecialchars($movie_title), "success");
    }
}

if (isset($_POST["remove_all_movies"])) {
    $stmt = $db->prepare("DELETE FROM Watchlist WHERE user_id = ?");
    $stmt->execute([$user_id]);
    flash('All movies have been successfully removed', "success");
}

$order = "DESC"; // default order
if (isset($_POST['filter'])) {
    if ($_POST['filter'] == "oldest") {
        $order = "ASC"; 
    }
}

$limit = 10; // default limit
if (isset($_POST['limit']) && is_numeric($_POST['limit']) && $_POST['limit'] > 0) {
    $limit = (int)$_POST['limit']; 
}

if ($limit < 1 || $limit > 100) {
    flash('Limit must be between 1 and 100', 'warning');
    $limit = 10;
}

$query = "SELECT movie_title, image_url FROM Watchlist WHERE user_id = :user_id ORDER BY created $order LIMIT $limit";
$stmt = $db->prepare($query);
$stmt->execute([":user_id" => $user_id]);
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

$userQuery = "SELECT username FROM Users WHERE id = :user_id";
$userStmt = $db->prepare($userQuery);
$userStmt->execute([":user_id" => $user_id]);
$username = $userStmt->fetchColumn();

$countQuery = "SELECT COUNT(*) FROM Watchlist WHERE user_id = :user_id";
$stmt = $db->prepare($countQuery);
$stmt->execute([":user_id" => $user_id]);
$totalMovies = $stmt->fetchColumn();
?>

<div class="container">
    <h1 id="watchlisttitle"><?php echo htmlspecialchars($username); ?>'s Watchlist <span class="badge">(<?php echo $totalMovies; ?> movies)</span></h1>

    <form method="POST" id="filterForm" class="filter-controls">
        <div class="filter-group">
            <label for="filter">Sort by:</label>
            <select id="filter" name="filter" class="form-control">
                <option value="newest" <?php echo $order=="DESC"?'selected':''; ?>>Newest First</option>
                <option value="oldest" <?php echo $order=="ASC"?'selected':''; ?>>Oldest First</option>
            </select>
        </div>
        
        <div class="filter-group">
            <label for="limit">Show:</label>
            <input id="limit" name="limit" type="number" min="1" max="100" value="<?php echo $limit; ?>" class="form-control">
            <span>movies</span>
        </div>
        
        <button type="submit" class="btn-filter">Apply Filters</button>
    </form>

    <?php if ($movies): ?>
        <div class="watchlist-actions">
            <form method="POST" onsubmit="return confirm('Are you sure you want to remove all movies from your watchlist?');">
                <input type="hidden" name="remove_all_movies" value="1">
                <button type="submit" id="removeallbutton">Remove All Movies</button>
            </form>
        </div>
        
        <form id="watchlist-form" method="POST" onsubmit="return checkForm()">
            <div id="watchlist-content">
                <div class="movie-grid">
                    <?php foreach ($movies as $movie): ?>
                        <div class="movie-card">
                            <div class="movie-card-header">
                                <input type="checkbox" name="remove_movies[]" value="<?php echo htmlspecialchars($movie["movie_title"]); ?>" class="movie-checkbox">
                                <h3 class="movie-title"><?php echo htmlspecialchars($movie["movie_title"]); ?></h3>
                            </div>
                            
                            <?php if ($movie["image_url"]): ?>
                                <div class="movie-poster">
                                    <img src="<?php echo htmlspecialchars($movie["image_url"]); ?>" alt="Movie Poster">
                                </div>
                            <?php endif; ?>
                            
                            <div class="movie-actions">
                                <a href="movie_details.php?movie_title=<?php echo urlencode($movie['movie_title']); ?>" class="btn-view">View Details</a>
                                
                                <div class="rating-control">
                                    <label for="rating-<?php echo htmlspecialchars($movie["movie_title"]); ?>">Rate:</label>
                                    <input type="number" name="rating[<?php echo htmlspecialchars($movie["movie_title"]); ?>]" min="1" max="10" id="rating-<?php echo htmlspecialchars($movie["movie_title"]); ?>" class="rating-input">
                                    <button type="button" class="btn-rate" onclick="submitRating('<?php echo htmlspecialchars($movie["movie_title"]); ?>')">Rate</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn-remove">Remove Selected Movies</button>
            </div>
        </form>
    <?php else: ?>
        <div class="empty-state">
            <p>Your watchlist is empty. Add some movies from the <a href="dashboard.php">Dashboard</a>!</p>
        </div>
    <?php endif; ?>
</div>

<style>
.container {
    padding: 2rem;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 8px;
    margin: 2rem auto;
    max-width: 1200px;
}

.badge {
    background-color: var(--primary-color);
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: normal;
}

.filter-controls {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 1rem;
    margin-bottom: 2rem;
    background: none;
    box-shadow: none;
    padding: 0;
    max-width: 100%;
}

.filter-group {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.form-control {
    padding: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.btn-filter {
    background-color: var(--primary-color);
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    cursor: pointer;
}

.watchlist-actions {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 1rem;
}

.movie-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 1.5rem;
}

.movie-card {
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.movie-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.movie-card-header {
    padding: 1rem;
    display: flex;
    align-items: flex-start;
}

.movie-checkbox {
    margin-right: 0.5rem;
    margin-top: 0.25rem;
}

.movie-poster {
    width: 100%;
    height: 300px;
    overflow: hidden;
}

.movie-poster img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.movie-card:hover .movie-poster img {
    transform: scale(1.05);
}

.movie-actions {
    padding: 1rem;
}

.btn-view {
    display: inline-block;
    background-color: var(--primary-color);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    text-decoration: none;
    margin-bottom: 1rem;
    transition: background-color 0.3s ease;
}

.btn-view:hover {
    background-color: var(--accent-color);
    color: white;
    text-decoration: none;
}

.rating-control {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.rating-input {
    width: 60px;
    padding: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.btn-rate {
    background-color: var(--secondary-color);
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    cursor: pointer;
}

.form-actions {
    margin-top: 2rem;
    text-align: center;
}

.btn-remove {
    background-color: var(--danger-color);
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
}

.empty-state {
    text-align: center;
    padding: 3rem;
    background-color: #f8f9fa;
    border-radius: 8px;
    margin-top: 2rem;
}

.empty-state p {
    font-size: 1.2rem;
    color: #6c757d;
}

@media (max-width: 768px) {
    .filter-controls {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .movie-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
    function checkForm() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
        if (!checkedOne) {
            flash('No movies selected. Please select a movie before removing from watchlist.', "danger");
            return false; 
        }
        return true;
    }

    document.getElementById('filterForm').addEventListener('submit', function(event) {
        var limitInput = document.getElementById('limit');
        if (limitInput.value < 1 || limitInput.value > 100) {
            event.preventDefault();
            flash('Please enter a number between 1 and 100', "danger");
        }
    });

    function submitRating(movieTitle) {
        var rating = document.getElementById('rating-' + movieTitle).value;
        
        if (rating < 1 || rating > 10) {
            flash('Rating must be between 1 and 10', 'warning');
            return;
        }

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'save_ratings.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                flash('Rating saved successfully!', 'success');
            }
        };

        var params = 'movie_title=' + encodeURIComponent(movieTitle) + '&rating=' + encodeURIComponent(rating);
        xhr.send(params);
    }
</script>

<?php require(__DIR__ . "/../../partials/flash.php"); ?>
