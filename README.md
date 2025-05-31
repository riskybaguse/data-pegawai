# Data Pegawai App ✨
![App Screenshot](/resources/ss/homepage.png) <!-- Jangan lupa kasih screenshot ntar! -->

Aplikasi web simpel buat ngelola data pegawai. Buat yang males pake Excel atau database ribet. 

## Fitur Unggulan 🚀
- 📋 Liat daftar pegawai lengkap (biar gampang ngontrol)
- 🔍 Fitur cari data pegawai (buat nyari yang sering telat)
- ➕ Tambah data pegawai baru (buat yang baru join)
- ✏️ Edit data pegawai (misal ganti jabatan atau kontak)
- 🗑️ Hapus data pegawai (kalo udah resign... atau dipecat)
- 🧠 Validasi form otomatis (biar inputan ga ngawur)
- 😍 Notifikasi pake SweetAlert (biar lebih manis tampilannya)
- 📱 Responsive design (enak diliat di HP, tablet, sampe monitor gede)

---

## Tech Stack 💻

### 🔧 Backend
- ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=white) Laravel 12
- ![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white) PHP 8+

### 🎨 Frontend
- ![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?logo=bootstrap&logoColor=white) Bootstrap 5
- ![SweetAlert2](https://img.shields.io/badge/SweetAlert2-FF6C6C?logo=javascript&logoColor=white) SweetAlert2

### 🗄️ Database
- ![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white) MySQL (bisa disesuaikan)

### 🛠️ Tools & Lain-lain
- ![VSCode](https://img.shields.io/badge/VSCode-007ACC?logo=visualstudiocode&logoColor=white) VSCode
- ![Git](https://img.shields.io/badge/Git-F05032?logo=git&logoColor=white) Git + GitHub


## Cara Pake 🧑‍💻
1. Clone repo ini dulu:
   ```bash
    git clone https://github.com/riskybaguse/data-pegawai.git
2. Masuk ke folder proyek:
   ```bash
   cd data-pegawai
3. Install dependencies Laravel:
   ```bash
   composer install
4. Copy file .env.example jadi .env, lalu sesuaikan konfigurasi database kamu:
   ```bash
   cp .env.example .env
5. Generate app key:
    ```bash
    php artisan key:generate
6. Migrasi database:
    ```bash
    php artisan migrate
7. Jalankan server lokal:
    ```bash
    php artisan serve
8. Buka browser dan akses:
    ```bash
    http://localhost:8000/pegawai

Udah deh! Tinggal mainin:

 - Buat nambah pegawai: Isi form terus enter

 - Mau nyari? Ketik nama di kolom search

 - Edit/hapus? Pencet tombolnya di kolom aksi

## Fitur Search
![App Screenshot](/resources/ss/search.png)
## Halaman Tambah
![App Screenshot](/resources/ss/tambahpage.png)
## AlertTambah
![App Screenshot](/resources/ss/alerttambah.png)
## Halaman Edit
![App Screenshot](/resources/ss/editpage.png)
## Alert Update
![App Screenshot](/resources/ss/alertupdate.png)
## Alert Hapus
![App Screenshot](/resources/ss/alerthapus.png)
## Alert Hapus Berhasil
![App Screenshot](/resources/ss/alerthapuscek.png)

