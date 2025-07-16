# Watchlist Creator

A comprehensive web application for movie enthusiasts to discover, track, and rate movies. Built with PHP, MySQL, and integrated with the Online Movie Database API.

## 🌟 Features

### Core Functionality
- **Movie Search & Discovery**: Search for movies using the Online Movie Database API
- **Personal Watchlist**: Add movies to your personal watchlist for future viewing
- **Movie Ratings**: Rate movies you've watched (1-10 scale)
- **Recommendations**: Get personalized movie recommendations based on your ratings
- **User Authentication**: Secure login/registration system with role-based access
- **Admin Panel**: Administrative tools for managing users and content

### User Features
- **Dashboard**: Search and browse movies from a vast database
- **Watchlist Management**: Add, remove, and organize movies in your watchlist
- **Rating System**: Rate movies and view your rating history
- **Profile Management**: Update your profile and view your activity
- **Movie Details**: View detailed information about movies including posters and cast

### Admin Features
- **User Management**: View and manage all user accounts
- **Rating Management**: Edit and moderate user ratings
- **Role Assignment**: Assign and manage user roles
- **Content Management**: Oversee watchlist and rating data

## 🚀 Getting Started

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- Composer (for dependency management)

### Installation

1. **Clone the repository**
   ```bash
   git clone [repository-url]
   cd Watchlist-Creator
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Database Setup**
   - Create a MySQL database
   - Configure your database connection in `lib/db_config.php`
   - Run the database initialization script:
     ```
     Navigate to: public_html/Project/sql/init_db.php
     ```

4. **Environment Configuration**
   - Create a `.env` file in the root directory
   - Add your database URL:
     ```
     DB_URL=mysql://username:password@host:port/database_name
     ```

5. **API Configuration**
   - Get a RapidAPI key from [Online Movie Database API](https://rapidapi.com/apidojo/api/online-movie-database)
   - Update the API key in `public_html/Project/dashboard.php`

6. **Web Server Configuration**
   - Point your web server to the `public_html` directory
   - Ensure PHP has write permissions for session management

### Database Structure

The application uses the following main tables:

- **Users**: User accounts and authentication
- **Roles**: User role definitions
- **UserRoles**: Many-to-many relationship between users and roles
- **Watchlist**: User's saved movies
- **Ratings**: User movie ratings

## 📱 How to Use

### For Regular Users

1. **Registration/Login**
   - Visit the application and register with your email/username
   - Login with your credentials

2. **Discover Movies**
   - Go to the Dashboard to search for movies
   - Use the search bar to find specific movies or browse recommendations
   - Click on movies to view details

3. **Manage Your Watchlist**
   - Add movies to your watchlist from the search results
   - View your watchlist to see all saved movies
   - Remove movies you've watched or no longer want to track

4. **Rate Movies**
   - Rate movies you've watched (1-10 scale)
   - View your rating history in the Ratings section
   - Get personalized recommendations based on your ratings

5. **Get Recommendations**
   - Check the Recommendations tab for personalized movie suggestions
   - Recommendations are based on your rating patterns

### For Administrators

1. **User Management**
   - Access admin panel to view all users
   - Assign roles and manage user permissions
   - Monitor user activity

2. **Content Moderation**
   - Review and edit user ratings
   - Manage watchlist content
   - Oversee system data

## 🛠️ Technical Architecture

### Frontend
- **HTML5/CSS3**: Modern, responsive design
- **JavaScript**: Interactive features and form validation
- **Bootstrap-inspired styling**: Clean, user-friendly interface

### Backend
- **PHP**: Server-side logic and API integration
- **MySQL**: Relational database for data persistence
- **PDO**: Secure database connections and prepared statements

### External APIs
- **Online Movie Database API**: Movie search and metadata
- **RapidAPI**: API gateway for movie data

### Security Features
- **Password Hashing**: Secure password storage using PHP's password_hash()
- **SQL Injection Prevention**: Prepared statements for all database queries
- **XSS Protection**: Input sanitization and output escaping
- **Session Management**: Secure user session handling
- **Role-based Access Control**: Granular permissions system

## 📁 Project Structure

```
Watchlist Creator/
├── lib/                    # Core library files
│   ├── config.php         # Database configuration
│   ├── functions.php      # Utility functions
│   ├── db.php            # Database connection
│   └── ...
├── partials/              # Reusable UI components
│   ├── nav.php           # Navigation bar
│   └── flash.php         # Flash message system
├── public_html/           # Web-accessible files
│   └── Project/          # Main application
│       ├── index.php     # Entry point
│       ├── login.php     # Authentication
│       ├── dashboard.php # Movie search
│       ├── watchlist.php # Watchlist management
│       ├── user_ratings2.php # Rating system
│       ├── recommended.php # Recommendations
│       ├── admin/        # Admin panel
│       └── sql/          # Database migrations
└── composer.json          # PHP dependencies
```

## 🔧 Configuration

### Database Configuration
The application supports multiple database configuration methods:
1. **Environment Variables**: Set `DB_URL` in your environment
2. **`.env` File**: Create a `.env` file with your database URL
3. **Direct Configuration**: Edit `lib/db_config.php` for local development

### API Configuration
Update the RapidAPI key in `public_html/Project/dashboard.php`:
```php
"X-RapidAPI-Key: YOUR_API_KEY_HERE"
```

## 🚀 Deployment

### Heroku Deployment
The application is configured for Heroku deployment with:
- `Procfile`: Defines the web server process
- Environment variable support for database configuration
- Automatic database initialization

### Local Development
1. Set up a local web server (XAMPP, WAMP, etc.)
2. Configure your database
3. Run the database initialization script
4. Access the application through your local server

## 📊 Features in Detail

### Movie Search
- Real-time search using Online Movie Database API
- Auto-complete functionality
- Movie posters and metadata display
- Batch selection for adding multiple movies

### Watchlist Management
- Add/remove individual movies
- Bulk operations (remove multiple movies)
- Sort by newest/oldest
- Pagination and filtering
- Movie poster display

### Rating System
- 1-10 rating scale
- Rating history tracking
- Admin rating moderation
- User-specific rating views

### Recommendation Engine
- Personalized movie suggestions
- Based on user rating patterns
- Integration with watchlist system

## 🔒 Security Considerations

- All user inputs are sanitized and validated
- Database queries use prepared statements
- Passwords are hashed using PHP's built-in functions
- Session management includes security best practices
- Role-based access control for administrative functions

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📝 License

This project is developed as part of an academic course. Please refer to the course guidelines for usage permissions.

## 🆘 Support

For technical support or questions:
- Check the database connection and configuration
- Verify API key is valid and has sufficient quota
- Review server logs for error messages
- Ensure all dependencies are properly installed

## 🔄 Updates and Maintenance

- Regular database backups recommended
- Monitor API usage and quotas
- Keep PHP and MySQL versions updated
- Review and update security configurations regularly

---

**Built with ❤️ for movie enthusiasts everywhere**