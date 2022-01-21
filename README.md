## Laravel 8 Authentication with Laravel UI

# Set Up Laravel Project:

composer create-project laravel/laravel **project Name**

# Set Up Database Details in .ENV

-**[DB_CONNECTION=mysql]** -**[DB_HOST=127.0.0.1]** -**[DB_PORT=3306]** -**[DB_DATABASE=database_name]** -**[DB_USERNAME=database_user_name]** -**[DB_PASSWORD=database_password]**

# Install Laravel UI

$ composer require laravel/ui

# Step up Auth Scaffolding

$php artisan ui bootstrap --auth

# Run npm install && npm run dev command

$ npm install && npm run dev

# Migrate your database

$ php artisan migrate

# Now our Laravel 8 authentication system is ready. you can run serve

$ php artisan serve
