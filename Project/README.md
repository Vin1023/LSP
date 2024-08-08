# Aplikasi Manajemen Mahasiswa dan Pengumuman

Aplikasi ini adalah sistem manajemen mahasiswa dan pengumuman yang dibangun menggunakan Laravel. Aplikasi ini menyediakan fitur untuk mengelola profil mahasiswa, akun, pengajuan, dan pengumuman.

## Fitur Utama

- **Manajemen Mahasiswa:**
  - Menampilkan profil mahasiswa.
  - Mengelola akun mahasiswa.
  - Menampilkan daftar mahasiswa.
  - Mengelola pengajuan status mahasiswa.

- **Manajemen Pengumuman:**
  - Menampilkan daftar pengumuman.
  - Membuat, mengedit, dan menghapus pengumuman.
  - Mengunggah gambar untuk pengumuman.

- **Autentikasi:**
  - Sistem login dan logout.
  - Proteksi rute menggunakan middleware `auth`.


## Instalasi Dependency

composer install

## Migrasi Database

php artisan migrate

## Menjalankan sistem dibrowser

php artisan serve

