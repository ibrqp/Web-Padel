1. 📌 Latar Belakang

Perkembangan olahraga padel di Indonesia menunjukkan peningkatan signifikan, namun sistem reservasi masih banyak dilakukan secara manual (WhatsApp atau on-site). Hal ini menimbulkan beberapa permasalahan:

Risiko double booking
Kurangnya transparansi jadwal
Kesulitan monitoring bisnis

Solusi yang diusulkan adalah sistem booking berbasis web yang memungkinkan:

Akses informasi lapangan secara terbuka
Reservasi online terintegrasi
Monitoring operasional dan finansial
2. 🎯 Tujuan Sistem
Meningkatkan efisiensi proses booking
Memberikan kemudahan akses bagi pengguna
Mendukung pengelolaan operasional dan analitik bisnis
3. 👥 User Role & Hak Akses
1. Public (Belum Login)

Dapat mengakses tanpa autentikasi:

Melihat daftar lapangan
Melihat harga
Melihat jadwal ketersediaan (real-time, read-only)

Catatan: Tidak dapat melakukan booking

2. User (Sudah Login)

Hak akses:

Melakukan booking lapangan
Melakukan pembayaran
Melihat riwayat booking
Mengelola profil
3. Admin

Hak akses:

Mengelola lapangan
Mengelola booking
Verifikasi pembayaran
Mengatur jadwal (blokir slot)
4. Owner (Pemilik)

Hak akses:

Melihat dashboard bisnis
Monitoring pendapatan
Melihat laporan & statistik
Audit aktivitas admin
4. ⚙️ Fitur Utama
🔐 A. Authentication
Register (User)
Login
Logout
Forgot password
Role-based access control
🌐 B. Public Access (Tanpa Login)
Halaman landing (informasi lapangan)
Daftar lapangan
Kalender/jadwal booking (read-only)
Tampilan slot:
Tersedia
Tidak tersedia
👤 C. User Features
1. Booking Lapangan
Pilih tanggal
Pilih jam
Pilih lapangan
Sistem validasi ketersediaan
Kalkulasi harga otomatis
2. Pembayaran
Upload bukti transfer / payment gateway
Status:
Pending
Paid
Cancelled
3. Riwayat Booking
Detail transaksi
Status booking
Riwayat penggunaan
4. Profil
Edit data
Kontak (email, nomor HP)
🛠️ D. Admin Panel
1. Manajemen Lapangan
Tambah/edit/hapus lapangan
Status aktif/nonaktif
Harga per jam
2. Manajemen Booking
Lihat semua booking
Approve / reject booking
Update status pembayaran
3. Manajemen Jadwal
Blokir slot (maintenance/event)
Override jadwal
4. Manajemen User
Lihat data user
Suspend akun
👑 E. Owner Panel
1. Dashboard
Total booking
Total pendapatan
Grafik performa (harian/bulanan)
2. Laporan
Laporan transaksi
Laporan penggunaan lapangan
Export (PDF/Excel)
3. Monitoring
Aktivitas admin
Statistik bisnis
5. 🗂️ Struktur Database (Simplified)
Users
id
name
email
password
role
Courts
id
name
price_per_hour
status
Bookings
id
user_id
court_id
date
start_time
end_time
total_price
status
Payments
id
booking_id
payment_proof
status
6. 🔄 Flow Sistem
Flow Public (Tanpa Login)
User membuka website
Melihat jadwal
Klik slot tersedia
Sistem meminta login
Flow Booking (Login Required)
User login
Pilih jadwal
Sistem cek ketersediaan
User konfirmasi booking
User melakukan pembayaran
Admin verifikasi
Booking aktif
7. 🖥️ Teknologi yang Disarankan
Backend:
Laravel
Laravel Breeze / Jetstream
Filament (Admin Panel)
Frontend:
Blade / Inertia (Vue/React)
Tailwind CSS
Database:
MySQL
Tambahan:
PWA (opsional)
Payment Gateway (Midtrans / Xendit)
8. 📊 KPI (Key Performance Indicators)
Jumlah booking per hari
Tingkat okupansi lapangan
Revenue bulanan
Conversion rate (visitor → booking)
9. 🚧 Risiko & Mitigasi
Risiko	Mitigasi
Double booking	Validasi & lock slot
User tidak bayar	Auto cancel (timeout)
Kesalahan admin	Audit log
10. 🚀 Pengembangan Lanjutan
Mobile app (Flutter)
Membership system
Dynamic pricing
Notifikasi WhatsApp
11. 🎨 Konsep UI/UX
Landing page informatif
Kalender booking interaktif (seperti bioskop)
Dashboard user
Admin panel (Filament)
Owner dashboard (grafik analitik)
12. 📌 Kesimpulan

Sistem ini mengadopsi pendekatan:

Open access (tanpa login) untuk eksplorasi
Authenticated access untuk transaksi

Dengan model ini:

User experience lebih baik
Risiko sistem lebih kecil
Skalabilitas bisnis lebih tinggi