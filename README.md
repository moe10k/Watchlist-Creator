# Movie Watchlist Application

A personal movie watchlist application that allows you to track, rate, and manage movies you want to watch.

## Features

- User registration and authentication
- Add movies to your watchlist
- Rate movies on a scale of 1-10
- View detailed information about movies
- Filter and sort your watchlist
- Remove movies from your watchlist
- Get movie recommendations based on your ratings

## Setup Instructions

### Prerequisites

- PHP 8.0 or higher
- MySQL database
- Web server (Apache, Nginx, etc.)

### Database Setup

1. Create a MySQL database named `watch_list`
2. Import the SQL files from the `public_html/Project/sql` directory in numerical order

### Configuration

1. Copy the `.env.example` file to `.env`
2. Update the database connection details in the `.env` file:
   ```
   DB_URL=mysql://username:password@localhost:3306/watch_list
   ```

### Running the Application

1. Start your web server
2. Navigate to the application in your browser
3. Register a new account
4. Start adding movies to your watchlist!

## Usage

- **Login/Register**: Create an account or log in to access your watchlist
- **Add Movies**: Search for movies and add them to your watchlist
- **Rate Movies**: Rate movies on a scale of 1-10
- **Filter Watchlist**: Sort your watchlist by newest or oldest first
- **Remove Movies**: Remove individual movies or clear your entire watchlist

## License

This project is for personal use only.