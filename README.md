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


1. Prepare your .env file there with database connection and other settings
2. Run composer install command
3. Run php artisan migrate --seed command. Seeds are important, because they will create the first admin user for you.
4. Run php artisan key:generate command.
5. And that's it, go to your domain and login:
Email: admin@admin.com
Password: password




