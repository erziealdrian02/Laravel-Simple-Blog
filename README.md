# Laravel Blog Post Management

## Description

This project is a Laravel-based blog post management system that allows users to create, edit, schedule, and save posts as drafts. The system uses Laravel Blade, Alpine.js for dynamic effects on the UI, as well as a MySQL database to store data.

---

## Key Features

-   CRUD (Create, Read, Update, Delete) for blog posts
-   Schedule posts by selecting a date and time
-   Save posts as drafts
-   Form input validation
-   Interactive UI with Alpine.js

---

## Installation

### 1. Clone Repository

```sh
git clone https://github.com/erziealdrian02/Laravel-Simple-Blog.git
cd Laravel-Simple-Blog
```

### 2. Install Dependencies

Make sure Composer is installed on your system.

```sh
composer install
```

### 3. Create Environment File

```sh
cp .env.example .env
```

Then edit the `.env` file to set the database connection, for example:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key

```sh
php artisan key:generate
```

### 5. Database Migration

```sh
php artisan migrate
```

### 6. Run Dev

```sh
npm run dev
```

### 7. Run Server

```sh
npm run serve
```

Access the project in a browser via `http://127.0.0.1:3000`

### 7. Run Scheduled

```sh
php artisan schedule:work
```

---

## Project Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── PostController.php
│   ├── Models/
│   │   ├── Post.php
│
├── resources/
│   ├── views/
│   │   ├── posts/
│   │   │   ├── index.blade.php
│   │   │   ├── create.blade.php
│   │   │   ├── edit.blade.php
│   │   │   ├── show.blade.php
│   ├── home.blade.php
│
├── routes/
│   ├── web.php
│
├── database/
│   ├── migrations/
│   │   ├── create_posts_table.php
│
├── public/
├── .env
├── composer.json
├── README.md
```

## Contributors

| Contributor                                                                                                    | Profile                                             |
| -------------------------------------------------------------------------------------------------------------- | --------------------------------------------------- |
| <img src="https://github.com/erziealdrian02.png" alt="erziealdrian02" width="40" style="border-radius: 100%"/> | [erziealdrian02](https://github.com/erziealdrian02) |
| <img src="https://github.com/yuki817.png" alt="yuki817" width="40" style="border-radius: 100%"/>               | [yuki817](https://github.com/yuki817)               |

If you have any questions or concerns, please create an issue or pull request. 🚀
