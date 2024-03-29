Hotel Booking System using Laravel
Table of Contents
Introduction
Features
Requirements
Installation
Configuration
Usage
Testing
Contributing
License
Introduction
This is a Hotel Booking System built using the Laravel framework. The system allows users to browse available hotels, view room details, and make reservations. It is designed to be user-friendly and efficient for both customers and hotel staff.

Features
User authentication
Hotel and room management
Reservation system
User-friendly interface
Requirements
PHP 7.4 or later
Composer
Laravel 8.x
MySQL or any other relational database
Node.js and npm (for asset compilation)

Installation
Clone the repository:

git clone https://github.com/yourusername/hotel-booking-system.git
cd hotel-booking-system


Install dependencies:

composer install
npm install
Create a copy of the .env.example file:

cp .env.example .env

Generate an application key:

php artisan key:generate
Configure your database connection in the .env file:
env

DB_CONNECTION=mysql
DB_HOST=your_database_host
DB_PORT=your_database_port
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
Migrate the database:
php artisan migrate


Seed the database with sample data:
php artisan db:seed

Configuration
Update the APP_NAME and other relevant configurations in the .env file.
Set up mail configuration for reservation notifications.
Usage
Start the development server:
php artisan serve
Visit http://localhost:8000 in your browser.

Log in using the default admin credentials:

Email: admin@example.com
Password: password
Explore the application and make bookings.

Testing
To run the tests, use the following command:
php artisan test
 
