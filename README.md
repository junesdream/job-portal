# Jobportal

This is a Job Portal project developed with Laravel in the backend and HTML/CSS with UI using Bootstrap in the frontend. The project provides features for users to view, create, manage, and delete jobs, as well as manage companies and job categories.

## Features

-   View job listings, create, edit, and delete job postings.
-   Assign job postings to specific companies and categories.
-   User role management: Admin, Employer, User.
-   Authentication system for restricted actions.
-   RESTful resource controllers for managing jobs, companies, and categories.

## Voraussetzungen

-   PHP >= 8.2
-   Composer
-   Node.js & npm
-   Laravel 11.9
-   SQLite/MySQL (or another supported database))

## Installation

1. Clone the repository::

    ```bash
    git clone https://github.com/junesdream/job-portal.git
    cd job-portal
    ```

2. Install dependencies:

    ```bash
    composer install
    npm install
    ```

3. Create the .env configuration file:

    ```bash
    cp .env.example .env
    ```

4. Generiere the application key:

    ```bash
    php artisan key:generate
    ```

5. Set up the database:

    - Update the .env file with your database configuration..
    - Run the migrations and seed the database:
        ```bash
        php artisan migrate --seed
        ```

6. Start the local development server:
    ```bash
    php artisan serve
    ```

## Usage

-   Visit http://127.0.0.1:8000 in your browser.
-   You can log in using the default admin credentials created by the seeder or register a new user.
-   Admin and employer roles can create and manage job postings.
-   Users can view job postings

## Runnig Tests

To run the tests for this application:

```bash
php artisan test
```

## Development Tools

The project uses additional tools to assist development:

-   \*\*Laravel Pint for code styling and linting:
    ```bash
    vendor/bin/pint
    ```
-   \*\*Laravel Sail to run the application in a Docker environment:
    ```bash
    ./vendor/bin/sail up
    ```
-   \*\*Laravel Pail for real-time log viewing during development.

To start the local development environment with multiple services:

```bash
composer run dev
```

## Troubleshooting

-   **403 Unauthorized**: Stelle sicher, dass der Benutzer die richtige Rolle hat, um die Aktion auszuführen.
-   \*\*Database issues: Make sure migrations have been run and tables exist in your database.
-   \*\*Login problems: Check user roles and permissions.

## Lizenz

This project is licensed under the MIT License. See the LICENSE file for
