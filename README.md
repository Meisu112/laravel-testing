# Laravel Login & Registration System

A web-based authentication system built with **Laravel and PHP**. This project demonstrates user registration, login, authentication, and a personalized dashboard, with a focus on learning Laravel's MVC architecture and database integration.

## Project Overview

The Laravel Login & Registration System is a learning project developed to practice backend web development using Laravel. It allows users to create accounts, log in, and access a dashboard after successful authentication.

## Features

- **User Registration** — Create an account with name, email, phone number, and password.
- **User Login** — Authenticate users with their registered credentials.
- **Input Validation** — Validate submitted registration data.
- **Password Hashing** — Store passwords securely using Laravel's hashing functionality.
- **Dashboard** — Display user information after login.
- **Logout** — End the authenticated session.
- **Profile Management UI** — Profile editing and password-change pages are included in the project.

*Note: Verify each feature in the running application before presenting it as fully implemented.*

## Technologies Used

- **Backend:** PHP, Laravel
- **Frontend:** HTML, CSS, Blade Templates
- **Database:** SQLite
- **Development Environment:** Laravel Herd
- **Version Control:** Git and GitHub

## Screenshots

Screenshots of the application's main pages will be added here.

| Register Page | Login Page |
|---|---|
| ![Register Page](docs/screenshots/register.png) | ![Login Page](docs/screenshots/login.png) |

| Dashboard |
|---|
| ![Dashboard](docs/screenshots/dashboard.png) |

*To display these screenshots, add the corresponding image files to `docs/screenshots/` in this repository.*

## Installation and Setup

### Prerequisites

Make sure the following tools are installed:

- PHP 8.3 or a compatible version supported by the project
- Composer
- Node.js and npm
- Git

Laravel Herd can be used as the local PHP development environment on Windows.

### 1. Clone the Repository

```bash
git clone https://github.com/Meisu112/laravel-testing.git
cd laravel-testing
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Configure the Environment

Copy the example environment file.

**PowerShell:**

```powershell
Copy-Item .env.example .env
```

Generate the application key.

```bash
php artisan key:generate
```

### 4. Set Up the SQLite Database

Create the database file if it does not already exist.

**PowerShell:**

```powershell
if (!(Test-Path database/database.sqlite)) {
    New-Item database/database.sqlite -ItemType File
}
```

Make sure `.env` contains:

```env
DB_CONNECTION=sqlite
```

Run the database migrations.

```bash
php artisan migrate
```

### 5. Install Frontend Dependencies

```bash
npm install
npm run build
```

### 6. Start the Application

```bash
php artisan serve
```

Open the local URL shown in the terminal, usually:

`http://127.0.0.1:8000`

### 7. Create an Account

Open the registration page, create a test account, and use the registered credentials to test the login and dashboard flow.

## Project Structure

```text
laravel-testing/
├── app/
│   ├── Http/Controllers/
│   └── Models/
├── database/
│   └── migrations/
├── public/
├── resources/
│   └── views/
│       └── auth/
├── routes/
│   └── web.php
├── .env.example
├── composer.json
└── README.md
```

## Learning Objectives

- Understand Laravel's MVC architecture.
- Create routes and controllers.
- Build dynamic pages with Blade templates.
- Validate user input.
- Work with database migrations and Eloquent models.
- Implement basic authentication workflows.
- Use Git and GitHub for version control.

## Developer

**GitHub:** [Meisu112](https://github.com/Meisu112)

**Repository:** [Laravel Login & Registration System](https://github.com/Meisu112/laravel-testing)

---

*Developed as a Laravel learning project to strengthen PHP backend development skills.*
