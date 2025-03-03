# Laravel Blog Post Management

## Deskripsi
Proyek ini adalah sistem manajemen postingan blog berbasis Laravel yang memungkinkan pengguna untuk membuat, mengedit, menjadwalkan, dan menyimpan postingan sebagai draft. Sistem ini menggunakan Laravel Blade, Alpine.js untuk efek dinamis pada UI, serta database MySQL untuk menyimpan data.

---

## Fitur Utama
- CRUD (Create, Read, Update, Delete) untuk postingan blog
- Menjadwalkan postingan dengan memilih tanggal dan waktu
- Menyimpan postingan sebagai draft
- Validasi input form
- UI interaktif dengan Alpine.js

---

## Instalasi
### 1. Clone Repository
```sh
git clone https://github.com/erziealdrian02/Laravel-Simple-Blog.git
cd Laravel-Simple-Blog
```

### 2. Instal Dependensi
Pastikan Composer sudah terinstall di sistem kamu.
```sh
composer install
```

### 3. Buat File Environment
```sh
cp .env.example .env
```
Lalu edit file `.env` untuk mengatur koneksi database, contohnya:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Key Aplikasi
```sh
php artisan key:generate
```

### 5. Migrasi Database
```sh
php artisan migrate
```

### 6. Jalankan Server
```sh
npm run serve
```
Akses proyek di browser melalui `http://127.0.0.1:3000`

---

## Struktur Proyek
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

## Kontributor
- **Muhamad Erzie Aldrian Nugraha**

Jika ada pertanyaan atau masalah, silakan buat issue atau pull request. 🚀
