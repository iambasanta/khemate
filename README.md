<p align="center">
  <img src="./public/logos/logo-white-text.png" alt="khemate">
</p>

<p align="center">
This e-commerce site is developed as a project for the E-Commerce subject, aiming to create a comprehensive e-commerce web application to simulate an online shopping platform.
</p>

## Technologies used

-   **[Laravel](https://laravel.com/)**
-   **[Tailwind CSS](https://tailwindcss.com/)**
-   **[Laravel Livewire](https://kirschbaumdevelopment.com)**
-   **[Alpine.js](https://alpinejs.dev/)**

## Installation

Please check the official Laravel installation guide for server requirements before you start.

-   [Official Documentation](https://laravel.com/docs/10.x)

Clone this repository (or download the zip file and extract it)

    git@github.com:iambasanta/khemate.git

Change directory to the project directory

    cd khemate

Install composer dependencies

    composer install

Install npm dependencies

    npm install

Copy the example `.env.example` in `.env` file

    cp .env.example .env

Open and make the required configuration changes in the `.env` file

-   `DB_CONNECTION`
-   `DB_HOST`
-   `DB_PORT`
-   `DB_DATABASE`
-   `DB_USERNAME`
-   `DB_PASSWORD`

Generate an app encryption key

    php artisan key:generate

Run the database migrations (**Make sure the `.env` file is properly configured with your database credentials**)

    php artisan migrate

Seed the database (OPTIONAL)

    php artisan db:seed

Generates fake data using database `seeder` and `factories`

#### **Admin user credentials**

| Email             | Password |
| ----------------- | -------- |
| admin@khemate.com | password |

Start the local development server

    php artisan serve

Build the assets by running

    npm run dev

Or use [Laravel sail](https://laravel.com/docs/10.x/sail)

    ./vendor/bin/sail up -d

Now you can visit:

-   http://localhost:8000 (visitor)
-   http://localhost:8000/admin (admin)

on your web-broswer to access the website.
