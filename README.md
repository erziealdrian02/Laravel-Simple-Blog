# Laravel Blog Post Management

## Description
This project is a Laravel-based blog post management system that allows users to create, edit, schedule, and save posts as drafts. The system uses Laravel Blade, Alpine.js for dynamic UI effects, and a MySQL database to store data.

---

## Main Features
- CRUD (Create, Read, Update, Delete) for blog posts
- Schedule posts by selecting a date and time
- Save posts as drafts
- Form input validation
- Interactive UI with Alpine.js

---

## Installation
### Clone Repository
``sh
git clone https://github.com/erziealdrian02/Laravel-Simple-Blog.git
cd Laravel-Simple-Blog
```

### Install Dependencies
Make sure Composer is installed on your system.
```sh
composer install
```

### Create Environment File
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

### Generate Application Key
```sh
php artisan key:generate
```

### Database Migration
```sh
php artisan migrate
```

### 6. Run Vite
```sh
npm run dev
```
### 7. Run Server
```sh
npm run serve
```
Access the project in a browser via `http://127.0.0.1:3000`

---

## Project Structure
```
├── app/
│ ├── Http/
│ │ ├── Controllers/
│ │ │ ├── PostController.php
│ ├── Models/
│ │ ├── Post.php
│
├── resources/
│ ├── views/
│ │ ├── posts/
│ │ │ ├── index.blade.php
│ │ │ ├── create.blade.php
│ │ │ ├── edit.blade.php
│ │ │ ├── show.blade.php
│ ├── home.blade.php
│
├── routes/
│ ├── web.php
│
├── database/
│ ├── migrations/
│ ├── create_posts_table.php
│
├── public/
├── .env
├── composer.json
├── README.md
```

## Contributors
- **Muhamad Erzie Aldrian Nugraha**

If you have any questions or concerns, please create an issue or pull request. 🚀

Translated with DeepL.com (free version)
