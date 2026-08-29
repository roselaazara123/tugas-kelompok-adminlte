# Project Web Film (Kelompok)

Aplikasi manajemen data film berbasis Laravel.

## Petunjuk Instalasi & Panduan Guru / Penguji

### 1. Persiapan Database
1. Buat database baru di phpMyAdmin (misal: `kelompoklaravel`).
2. Duplikat file `.env.example` menjadi `.env`.
3. Buka file `.env` dan sesuaikan nama database pada baris `DB_DATABASE`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=kelompoklaravel
   DB_USERNAME=root
   DB_PASSWORD=
