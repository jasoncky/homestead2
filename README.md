# homestead2

#access API
1. first had to request a token
Submission: http://localhost:8000/oauth/token
paramters
a. grant_type  (default: password)
b. client_id (default: 2)
c. client_secret ((default: check oauth_clients table)
d. username (default: <your login username>)
e. password (default: <your login password>)
f. scope (default: *)
    
#specific field permission
refer to file (example)
1. app/providers/AuthServiceProvider.php
2. user controller
3. user view blade file

#language file
refer to file
1. resource/lang/

#installation
1. Prepare your .env file there with database connection and other settings
2. Run composer install command
3. Run php artisan migrate --seed command. Seeds are important, because they will create the first admin user for you.
4. Run php artisan key:generate command.
5. Run php artisan storage:link
6. Run php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="config" (https://quickadminpanel.com/blog/top-5-questionsanswers-about-spatie-medialibrary/)
7. And that's it, go to your domain and login:
Email: admin@admin.com
Password: password

#other notes
If you are using php artisan serve its possible that your public folder is not being used, so use PHP native server instead and specify the public folder as the web root.

Stop artisan serve and try using PHP native server by issuing this command at the root of your Laravel project: php -S localhost:8000 -t public


