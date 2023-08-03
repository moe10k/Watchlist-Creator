CREATE TABLE IF NOT EXISTS `Watchlist` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `movie_title` VARCHAR(255) NOT NULL,
    `image_url` TEXT NOT NULL,
    `created`    timestamp default current_timestamp,
    `modified`   timestamp default current_timestamp on update current_timestamp,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `Users`(`id`) ON DELETE CASCADE
)
