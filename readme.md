## About Take Notes
Take Notes it's a web project proudly created using [Laravel](https://github.com/laravel/laravel) with a purpose to share and keep notes with your friends.
[need to improve this description]

## Installation Steps
### 0. Requirements
As we are using Laravel 5.6 in this project, see at their [oficial documentation](https://laravel.com/docs/5.6/installation) if you have all the requirements installed.

### 1. Get a copy of the project
You can clone this project or simply download the source code and put it in any directory.

### 2. Install
Using [Composer](https://getcomposer.org/), run the command ``composer install`` at the project directory and wait it to complete.

### 3. Configure Project
Go to ``PROJECT_DIRECTORY\.env`` (if this file doesn't exist, simply rename or duplicate ``PROJECT_DIRECTORY\.env.example`` to .env) file and configure **at least** the following variables:
```
DB_HOST=your_database_host
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

MAIL_DRIVER=your_email_driver
MAIL_HOST=your_email_host
MAIL_PORT=your_email_port
MAIL_USERNAME=your_email_username
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=your_email_encryption

FACEBOOK_CLIENT_ID=your_facebook_app_id
FACEBOOK_CLIENT_SECRET=your_facebook_app_secret

TWITTER_CLIENT_ID=your_twitter_app_id
TWITTER_CLIENT_SECRET=your_twitter_app_secret

GOOGLE_CLIENT_ID=your_google_app_id
GOOGLE_CLIENT_SECRET=your_google_app_secret
```

### 4. Import Database
Open a terminal window, go to ``PROJECT_DIRECTORY`` and run the command ``php artisan migrate --seed``

#### 4.1 Demo user
You can use the following user after running the migrate command
```
User: user@example.com
Password: password
```

### 5. Run
Open a terminal window, go to ``PROJECT_DIRECTORY`` and run the command ``php artisan serve``