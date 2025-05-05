# Post Management Web Application

A full-featured blog/post management application built with PHP, Laravel, PostgreSQL and Tailwind CSS. This application allows users to create, read, update, and delete posts while providing advanced management features for administrators.

## Table of Contents

-   [Features](#features)
    -   [User Role](#user-role)
    -   [Admin Role](#admin-role)
-   [Technologies Used](#technologies-used)
-   [Prerequisites](#prerequisites)
-   [Installation](#installation)
-   [Creating the First Admin](#creating-the-first-admin)
-   [Admin Registration Process](#admin-registration-process)
-   [Running the Application](#running-the-application)

## Features

### User Role

-   Authentication (Register/Login)
-   Create, edit, update and delete their own posts
-   View posts from other users
-   Responsive user interface designed with Tailwind CSS

### Admin Role

-   All user capabilities
-   Manage posts from all users (create, read, update, delete)
-   Admin dashboard access
-   Admin approval system for new admin registration

## Technologies Used

-   **Backend**: PHP, Laravel
-   **Database**: PostgreSQL
-   **Frontend**: Blade templates, Tailwind CSS
-   **Authentication**: Laravel's built-in authentication

## Prerequisites

-   PHP >= 8.0
-   Composer
-   Node.js and NPM
-   PostgreSQL database
-   php-pgsql extension

## Installation

1. Clone the repository

```bash
git clone https://github.com/yourusername/Post-Web-App.git
cd Post-Web-App
```

2. Install PHP dependencies

```bash
composer install
```

3. Install NPM dependencies

```bash
npm install
```

4. Create a copy of the .env file

```bash
cp .env.example .env
```

5. Generate application key

```bash
php artisan key:generate
```

6. Install PostgreSQL PHP driver if not already installed

```bash
sudo apt-get install php-pgsql
```

7. Configure your database settings in the `.env` file:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

8. Run migrations to create the database tables

```bash
php artisan migrate
```

9. Build assets (for development)

```bash
npm run dev
```

## Creating the First Admin

For the first admin user:

1. Register a regular user through the application registration form
2. Access your PostgreSQL database and manually update the user's role:

```sql
UPDATE users SET role = 'admin' WHERE email = 'admin@example.com';
```

After this, you can log in with the admin account and approve other admin registrations through the admin dashboard.

## Admin Registration Process

1. New users can register with the "admin" role option
2. However, they cannot access the admin dashboard until approved
3. Existing admins must approve new admin registrations through the admin dashboard
4. After approval, new admins can log in and access the admin dashboard

## Running the Application

```bash
php artisan serve
```

The application will be available at http://localhost:8000
