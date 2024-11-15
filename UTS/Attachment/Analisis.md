# Business Requirements Document (BRD)  
**Aplikasi Manajemen Rumah Sakit**

## Tujuan Aplikasi
Aplikasi ini dirancang untuk mempermudah manajemen rumah sakit dengan memberikan akses yang berbeda kepada setiap peran (Admin, Dokter, Pasien) untuk mengelola data, jadwal, dan informasi layanan medis.  
- **Admin** memiliki akses penuh untuk mengelola data pengguna, dokter, pasien, dan jadwal layanan.
- **Dokter** hanya dapat mengelola pasien dan layanan medis mereka sendiri.
- **Pasien** hanya dapat melihat jadwal layanan dokter yang tersedia berdasarkan spesialisasi mereka.

## Aktor

### 1. **Admin**
- Mengelola data pengguna, dokter, pasien, dan jadwal layanan.
- Dapat menambah, mengedit, dan menghapus data.
- Dapat mengelola role pengguna.
- Memiliki akses penuh ke seluruh aplikasi.

### 2. **Dokter**
- Mengelola pasien mereka dan layanan medis mereka sendiri.
- Dapat melakukan CRUD pada data pasien yang mereka tangani.
- Mengelola jadwal praktek dan layanan medis yang mereka tawarkan.
- Mengakses data pasien yang terdaftar untuk layanan mereka.

### 3. **Pasien**
- Hanya dapat melihat jadwal layanan dokter yang sesuai dengan spesialisasi mereka.
- Tidak memiliki hak akses untuk mengedit atau menambah data.

## Fitur dan Fungsionalitas

### 1. **Login**
- Semua pengguna (Admin, Dokter, Pasien) harus login terlebih dahulu dengan peran yang valid.

### 2. **Sign Out**
- Semua pengguna memiliki fitur untuk keluar dari aplikasi setelah selesai berinteraksi dengan sistem.

### 3. **Pengaturan dan Manajemen Data:**
- **Admin:** Mengelola semua data pengguna, dokter, pasien, dan jadwal layanan.
- **Dokter:** Mengelola pasien yang mereka tangani, layanan yang mereka tawarkan, serta jadwal praktek mereka.
- **Pasien:** Hanya dapat melihat jadwal layanan dokter berdasarkan spesialisasi.

### 4. **Manajemen Jadwal:**
- Dokter dapat mengelola jadwal praktek mereka, termasuk waktu mulai dan selesai praktek, serta informasi terkait ruangan dan rumah sakit tempat mereka praktek.

## Model dan Struktur Tabel

### 1. **Model dan Migration untuk Dokter**
Model **Doctor** menyimpan data terkait dokter, termasuk informasi dasar seperti nama, spesialisasi, jenis kelamin, alamat, dan jadwal praktek mereka.

**Struktur Tabel: doctors**
- `id`: Primary key untuk setiap dokter (bigint UNSIGNED).
- `name`: Nama dokter (varchar(255)).
- `specialization`: Spesialisasi dokter (varchar(255)).
- `contact_info`: Informasi kontak dokter, seperti nomor telepon atau email (varchar(255)).
- `gender`: Jenis kelamin dokter (varchar(10)).
- `address`: Alamat dokter (text).
- `created_at`: Waktu saat data dibuat (timestamp).
- `updated_at`: Waktu saat data terakhir diperbarui (timestamp).

### 2. **Model dan Migration untuk Jadwal**
Model **Schedule** menyimpan data terkait jadwal praktek dokter, termasuk waktu mulai dan selesai praktek, nomor ruangan, serta nama rumah sakit tempat praktek dilakukan.

**Struktur Tabel: schedules**
- `id`: Primary key untuk setiap jadwal (bigint UNSIGNED).
- `doctor_id`: Mengacu pada dokter yang memiliki jadwal ini (bigint UNSIGNED).
- `day`: Hari praktek (varchar(20)).
- `time`: Rentang waktu praktek (varchar(20)).
- `start_time`: Waktu mulai praktek (time).
- `end_time`: Waktu selesai praktek (time).
- `room`: Nomor atau nama ruangan tempat praktek (varchar(255)).
- `hospital_name`: Nama rumah sakit tempat praktek dilakukan (varchar(255)).
- `created_at`: Waktu saat data dibuat (timestamp).
- `updated_at`: Waktu saat data terakhir diperbarui (timestamp).

## Flow Aplikasi

### 1. **Login:**
- Pengguna (Admin, Dokter, Pasien) akan melakukan login dengan peran yang valid. Setelah login, pengguna akan diarahkan ke dashboard yang sesuai dengan peran mereka.

### 2. **Dashboard Admin:**
- Admin dapat mengelola data pengguna, dokter, pasien, serta jadwal layanan.
- Admin dapat menambah, mengedit, dan menghapus data.

### 3. **Dashboard Dokter:**
- Dokter dapat melihat dan mengelola pasien yang mereka tangani.
- Dokter dapat menambah, mengedit, atau menghapus jadwal praktek mereka.

### 4. **Dashboard Pasien:**
- Pasien dapat melihat jadwal dokter berdasarkan spesialisasi mereka.

## Keamanan dan Akses

### 1. **Autentikasi:**
- Setiap pengguna harus login terlebih dahulu menggunakan kredensial yang valid.

### 2. **Authorization:**
- Akses ke setiap bagian aplikasi dibatasi berdasarkan peran pengguna (Admin, Dokter, Pasien).
