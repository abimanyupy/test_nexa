# test_nexa

## Cara Menjalankan Proyek

Berikut adalah langkah-langkah untuk menjalankan proyek ini di komputer lokal Anda:

### 1. Unduh ZIP Repository

*   Buka repository GitHub ini di browser Anda (https://github.com/abimanyupy/test_nexa.git).
*   Klik tombol "Code" berwarna hijau, lalu pilih "Download ZIP".
*   Tunggu hingga proses pengunduhan selesai.

### 2. Ekstrak ZIP

*   Setelah diunduh, ekstrak file ZIP ke lokasi yang Anda inginkan di komputer Anda.
*   Anda akan mendapatkan folder dengan nama `test_nexa-main` (atau nama lain sesuai dengan nama repository Anda). Ganti nama folder tersebut menjadi `test_nexa` agar lebih mudah.

### 3. Masuk ke Direktori Proyek

*   Buka terminal atau command prompt Anda.
*   Navigasikan ke direktori proyek yang sudah diekstrak:

    ```bash
    cd test_nexa
    ```

### 4. Instal Dependencies Composer

*   Pastikan Anda sudah menginstal Composer di komputer Anda. Jika belum, unduh dan instal dari [https://getcomposer.org/](https://getcomposer.org/).
*   Jalankan perintah berikut di terminal:

    ```bash
    composer install
    ```

### 5. Konfigurasi Environment

*   Salin file `.env.example` menjadi `.env`.
    ```bash
    cp .env.example .env
    ```
*   Buka file `.env` dan sesuaikan pengaturan database serta konfigurasi lainnya sesuai kebutuhan Anda.

### 6. Generate Key Aplikasi

*   Jalankan perintah berikut di terminal:

    ```bash
    php artisan key:generate
    ```
### 7. Konfigurasi Database

*   Pastikan Anda telah membuat database di sistem manajemen database Anda  (PostgreSQL).
  
    ```bash
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=nama_database_anda
    DB_USERNAME=username_database_anda
    DB_PASSWORD=password_database_anda
    ```
    

### 8. Migrasi Database dan Seeder

*   Jalankan perintah berikut di terminal untuk migrasi database beserta data dummy

    ```bash
    php artisan migrate:fresh --seed
    ```
    
### 9.  Compile Assets

*   Jalankan perintah berikut di terminal:

    ```bash
    npm install
    npm run dev
    ```

### 10. Jalankan Server Pengembangan

*   Jalankan perintah berikut di terminal:

    ```bash
    php artisan serve
    ```

*   Buka browser Anda dan akses alamat yang diberikan oleh perintah `php artisan serve` (biasanya `http://127.0.0.1:8000`).

## Teknologi yang Digunakan

*   Laravel 11
*   PHP
*   Composer
*   PostgreSQL


Terima kasih telah menggunakan proyek ini!
