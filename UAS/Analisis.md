# Latar Belakang
Seiring dengan berkembangnya industri event, baik itu dalam bentuk seminar, konferensi, konser, maupun pameran, kebutuhan akan sistem manajemen yang efisien dan terintegrasi semakin meningkat. Berbagai tantangan dalam mengelola event, seperti pemantauan pendaftaran peserta, pengelolaan tiket, serta penyampaian informasi yang tepat waktu, sering kali menjadi hambatan yang mengurangi kualitas pengalaman bagi peserta maupun penyelenggara acara.

Pada sisi lain, banyak penyelenggara event yang masih mengandalkan metode manual atau sistem yang tidak terintegrasi untuk mengelola kegiatan mereka. Proses seperti pendaftaran peserta yang terpisah dari pembelian tiket, serta kurangnya visibilitas terhadap acara-acara yang akan datang, menyebabkan ketidakefisienan yang berdampak pada kepuasan peserta. Hal ini menunjukkan bahwa ada kebutuhan mendesak akan sebuah solusi yang dapat menyederhanakan proses pengelolaan event dan mempermudah akses informasi acara bagi peserta.

Dengan adanya platform yang mengintegrasikan semua aspek event, mulai dari pendaftaran peserta, informasi detail event, hingga pembelian tiket, penyelenggara dapat lebih fokus pada kualitas acara itu sendiri. Begitu pula, peserta akan mendapatkan kemudahan dalam menemukan acara yang sesuai dengan kebutuhan mereka, serta melakukan pendaftaran dan pembayaran dengan lebih praktis.

Selain itu, meskipun banyak platform yang menawarkan berbagai fitur manajemen event, tidak semua dari mereka menyediakan pengalaman pengguna yang ramah dan terfokus pada efisiensi. Oleh karena itu, perlu adanya solusi yang tidak hanya menawarkan kemudahan bagi penyelenggara acara, tetapi juga kenyamanan dan transparansi bagi peserta.

Pengembangan aplikasi manajemen event ini bertujuan untuk menjawab tantangan tersebut, dengan menyediakan sebuah sistem yang mempermudah pengelolaan acara serta memberi pengalaman terbaik bagi pengguna. Aplikasi ini dirancang untuk menjadi solusi yang efisien dan efektif bagi penyelenggara event serta peserta, yang dapat diakses dengan mudah melalui berbagai platform.

## Kerangka Berfikir
1. Identifikasi Masalah
2. Tujuan Pengembangan Aplikasi
3. Fitur Utama Aplikasi
4. Alur Kerja Aplikasi
5. Analisis SWOT
6. Pengembangan dan Teknologi yang Digunakan
7. Evaluasi dan Perbaikan

---

# A. Narasi/Gambaran Umum tentang Lifestyle dan Hiburan
Lifestyle (gaya hidup) dan hiburan adalah dua aspek yang tidak terpisahkan dalam kehidupan modern. Lifestyle mencerminkan cara hidup seseorang, termasuk kebiasaan, preferensi, dan pola aktivitas sehari-hari. Sementara itu, hiburan merupakan bagian penting dari lifestyle yang bertujuan untuk memberikan kesenangan, relaksasi, dan pengalaman menyenangkan bagi individu. Hiburan dapat berupa berbagai aktivitas, seperti menonton konser, mengikuti festival, menghadiri seminar, atau sekadar bersantai di tempat-tempat menarik.

Dalam konteks perkotaan, lifestyle dan hiburan sering kali menjadi tolok ukur kualitas hidup, di mana masyarakat mencari pengalaman baru dan kesempatan untuk bersosialisasi melalui berbagai event dan kegiatan. Aplikasi manajemen event ini hadir untuk memudahkan pengguna dalam menemukan dan mengelola kegiatan hiburan yang sesuai dengan gaya hidup mereka.

---

# B. Latar Belakang Masalah dan Tujuan
Banyak penyelenggara event menghadapi kesulitan dalam mengelola informasi event secara terstruktur, mulai dari pendaftaran, promosi. Selain itu, calon peserta sering kali mengalami keterbatasan akses informasi mengenai event yang relevan dan terpercaya. Proses pendaftaran dan pembayaran event yang tidak efisien menjadi kendala lain yang sering dihadapi, sehingga menghambat pengalaman pengguna. Selain itu, transparansi informasi mengenai event yang akan diikuti masih menjadi masalah utama.

Untuk mengatasi permasalahan tersebut, aplikasi ini bertujuan menyediakan platform terintegrasi yang memungkinkan admin mengelola event dengan lebih mudah dan membantu peserta menemukan event yang sesuai dengan minat mereka. Aplikasi ini juga bertujuan meningkatkan efisiensi dalam pendaftaran dan manajemen event serta menyediakan informasi yang lebih transparan dan akurat. Dengan demikian, pengguna dapat menikmati pengalaman yang lebih baik dalam mengakses dan berpartisipasi dalam berbagai event.

---

# C. 5W 1H
- **Apa?** Aplikasi ini adalah platform manajemen event yang dirancang untuk memudahkan admin dalam mengelola informasi event secara lebih sistematis dan efisien.
- **Siapa?** Aplikasi ini ditujukan untuk penyelenggara event dan customer (penikmat event dan pembeli tiket).
- **Kapan?** Aplikasi ini dapat digunakan sebelum acara berlangsung untuk promosi dan pendaftaran peserta.
- **Di mana?** Aplikasi ini dapat diakses secara online melalui website atau aplikasi mobile.
- **Mengapa?** Untuk mengatasi berbagai kendala dalam pengelolaan dan pencarian informasi event.
- **Bagaimana?** Dengan fitur CRUD bagi admin, pencarian event bagi customer, serta integrasi informasi event secara sistematis.

---

# D. Analisis SWOT
| Kategori      | Analisis |
|--------------|----------|
| **Strengths** | - Antarmuka yang user-friendly. \  - Fitur lengkap seperti CRUD untuk admin. \  - Transparansi informasi event. |
| **Weaknesses** | - Ketergantungan pada koneksi internet. \  - Belum terintegrasi dengan gateway pembayaran. |
| **Opportunities** | - Pasar aplikasi manajemen event yang luas. \  - Potensi pengembangan fitur tambahan. |
| **Threats** | - Persaingan dengan platform serupa. \  - Risiko kebocoran data. |

---

# E. Fitur dan Alur Kerja
### 1. Login Page
- **Fitur:**
  - Admin: Memasukkan username dan password untuk mengakses dashboard.
  - Client/Pembeli Tiket: Memasukkan username dan password untuk mengakses halaman utama event.
- **Alur Kerja:**
  1. Pengguna membuka aplikasi.
  2. Halaman login muncul dengan dua kolom input.
  3. Pengguna memasukkan kredensial mereka dan menekan tombol Login.
  4. Jika kredensial valid, pengguna akan diarahkan ke halaman yang sesuai.

### 2. Dashboard Utama (Admin)
- **Fitur:**
  - Menu CRUD untuk manajemen event.
  - Tabel Event yang menampilkan daftar event.
  - Tombol Add, Edit, dan Delete.
  - Pencarian event berdasarkan kategori, tanggal, atau lokasi.
- **Alur Kerja:**
  1. Admin berhasil login dan diarahkan ke Dashboard Admin.
  2. Admin bisa menambah event baru.
  3. Admin dapat mengedit atau menghapus event.
  4. Admin dapat mencari event berdasarkan filter dan kategori.

### 3. Halaman Utama (Client/Pembeli Tiket)
- **Fitur:**
  - Daftar Event: Menampilkan daftar event yang dapat dicari.
  - Detail Event: Menampilkan informasi lengkap event.
  - Tautan ke website pembelian tiket.

Aplikasi ini dirancang untuk memberikan pengalaman praktis, efisien, dan transparan bagi pengguna, baik dari sisi penyelenggara event maupun peserta.

