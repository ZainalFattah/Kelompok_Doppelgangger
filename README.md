# Proyek CRUD Buku dengan CodeIgniter 4

Proyek ini adalah aplikasi web sederhana untuk mengelola data buku (Create, Read, Update, Delete) yang dibangun dengan framework CodeIgniter 4.

## Fitur

*   **Create:** Menambahkan data buku baru.
*   **Read:** Menampilkan daftar buku yang ada di database.
*   **Update:** Mengubah data buku yang sudah ada.
*   **Delete:** Menghapus data buku.

## Teknologi yang Digunakan

*   **Framework:** CodeIgniter 4
*   **Bahasa Pemrograman:** PHP 8.1
*   **Database:** (Tidak disebutkan secara spesifik, namun dapat dikonfigurasi di `app/Config/Database.php`)
*   **Web Server:** (Tidak disebutkan secara spesifik, dapat dijalankan dengan `php spark serve`)

## Struktur Proyek

*   `app/Controllers/Buku.php`: Mengatur logika untuk menangani permintaan terkait data buku.
*   `app/Models/BukuModel.php`: Berinteraksi dengan tabel `buku` di database.
*   `app/Views/`: Berisi file-file untuk menampilkan halaman web (daftar buku, tambah buku, edit buku).
*   `public/`: Direktori publik yang dapat diakses oleh pengguna.
*   `composer.json`: Mendefinisikan dependensi proyek.

## Cara Menjalankan Proyek

1.  **Clone repository ini:**
    ```bash
    git clone https://github.com/ZainalFattah/Kelompok_Doppelgangger.git
    ```
2.  **Install dependensi:**
    ```bash
    composer install
    ```
3.  **Konfigurasi database:**
    *   Salin file `.env.example` menjadi `.env`.
    *   Buka file `.env` dan sesuaikan konfigurasi database Anda.
    *   Buat database baru dan import file SQL yang berisi struktur tabel `buku`.
4.  **Jalankan web server:**
    ```bash
    php spark serve
    ```
5.  **Buka browser:**
    Akses `http://localhost:8080` di browser Anda.

## Kontribusi

Kontribusi dalam bentuk apapun sangat diterima. Silakan buat *pull request* atau *issue* jika Anda menemukan masalah atau memiliki ide untuk pengembangan lebih lanjut.
