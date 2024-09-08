
# Laravel Moris Todo App

Follow the steps below to clone and set up the project on your local machine.

## Prerequisites

Make sure you have the following installed on your machine:

- PHP (>= 8.2)
- Composer
- Node.js & NPM
- Git
- A database (MySQL, PostgreSQL, etc.)

## Getting Started

### 1. Clone the Repository

Clone the repository using the following command:

```bash
git clone https://github.com/Laravel-Moris/livewire-todo-app-demo.git
```

### 2. Install Project dependencies

```bash
cd livewire-todo-app-demo
```

Installing composer dependencies

```bash
composer install
```

Next, install Node.js dependencies:

```bash
npm install
```

### 3. Set Up Environment File

Create a copy of the `.env.example` file and rename it to `.env`:

```bash
cp .env.example .env
```

### 4. Generate Application Key

Generate the application key using:

```bash
php artisan key:generate
```

### 7. Configure Environment Variables

Update the `.env` file with your database credentials and any other necessary configurations (e.g., `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

### 8. Run Migrations

Run the following command to set up the database:

```bash
php artisan migrate
```

### 9. Run the Application

Start the development server:

```bash
npm run dev
```

```bash
php artisan serve
```

The application will be accessible at `http://127.0.0.1:8000`.

### How to contact us.

- You can send us an email on laravelmoris@gmail.com
