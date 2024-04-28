Steps to Run the VERT Furnishings Program

Step 1: Download and Install XAMPP

    1.	Visit the official Apache Friends website: XAMPP.
    2.	Download the latest version of XAMPP compatible with your operating system (Windows, macOS, or Linux).
    3.	Run the downloaded installer and follow the instructions of the installation wizard to complete the installation of XAMPP on your system.

Step 2: Download and Install Composer
    1.	Visit the official Composer website: Composer.
    2.	Install Composer on your machine.

Step 3: Install Laravel
    1.	Open a terminal or command prompt.
    2.	Run the following command to install Laravel globally on your system:
        composer global require laravel/installer 

Step 4: Configure the Database
    1.	Create a database named "stores" in MySQL.
    2.	Configure the .env file for the database:
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=stores
        DB_USERNAME=root
        DB_PASSWORD=

Step 6: Run Migrations
    1.	Execute the command to create tables in the database:
        php artisan migrate 

Step 7: Run the Local Server

    1.	Run the following command to start the development server::
        php artisan serve 
