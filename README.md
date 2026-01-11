# AbsenKu - Sistem Absensi Sekolah Digital

AbsenKu adalah sistem manajemen absensi sekolah modern yang dibangun menggunakan Laravel 12 dan Livewire 3. Sistem ini dirancang untuk memudahkan pencatatan kehadiran siswa oleh Guru Piket dan manajemen data oleh Admin.

## Fitur Utama

- **Dashboard Admin:** Statistik real-time, manajemen data kelas, siswa, dan tahun ajar.
- **Dashboard Guru Piket:** Input absensi harian dengan antarmuka yang intuitif.
- **Autentikasi:** Sistem masuk dan daftar yang rapi dengan peran (role) pengguna.
- **Ekspor Data:** Kemampuan mengekspor rekap absensi bulanan ke PDF dan Excel.
- **Desain Premium:** Menggunakan aesthetic glassmorphism dan Tailwind CSS.

## Panduan Penggunaan Sistem Autentikasi

Berikut adalah langkah-langkah untuk menggunakan fitur Welcome, Login, dan Register yang baru ditambahkan:

### 1. Halaman Awal (Welcome)
Saat pertama kali membuka aplikasi di `/`, Anda akan disambut oleh halaman landing.
- Klik **"Masuk"** di navigasi atas atau **"Masuk ke Akun"** di area hero untuk pergi ke halaman Login.
- Klik **"Mulai Gratis Sekarang"** untuk pergi ke halaman Registrasi.

### 2. Pendaftaran Akun (Register)
Jika Anda belum memiliki akun:
- Buka halaman `/register`.
- Isi **Nama Lengkap**, **Email**, dan **Kata Sandi**.
- Konfirmasi kata sandi Anda.
- Klik **"Daftar Sekarang"**.
- Secara default, akun baru akan mendapatkan peran sebagai **Guru Piket** dan akan langsung diarahkan ke Dashboard Guru.

### 3. Masuk ke Akun (Login)
Jika Anda sudah memiliki akun:
- Buka halaman `/login`.
- Masukkan **Email** atau **NIP** (untuk akun lama).
- Masukkan **Kata Sandi**.
- Klik **"Masuk Sekarang"**.
- Sistem akan secara otomatis mengarahkan Anda berdasarkan role:
    - **Admin:** Ke Dashboard Admin (`/admin/dashboard`).
    - **Guru Piket:** Ke Dashboard Guru (`/guru/dashboard`).

## Instalasi Pengembangan

1. Clone repositori ini.
2. Jalankan `composer install`.
3. Salin `.env.example` ke `.env` dan sesuaikan konfigurasi database.
4. Jalankan `php artisan key:generate`.
5. Jalankan `php artisan migrate`.
6. Jalankan `npm install && npm run dev`.
7. Jalankan `php artisan serve`.

---
*Dikembangkan dengan ❤️ untuk kemajuan pendidikan.*
