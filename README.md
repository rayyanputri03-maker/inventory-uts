\# 🌸 Maison de Clarissa - Inventory & Sales System

Sistem Manajemen Stok & Kasir Penjualan berbasis **Laravel 11** dan **Tailwind CSS** dengan antarmuka bertema *Fairy/Pastel Aesthetic*. Aplikasi ini dirancang untuk memudahkan pencatatan barang, pemantauan stok kritis, hingga cetak laporan penjualan secara *real-time*.

---

## ✨ Fitur Utama

- **📊 Aesthetic Dashboard:** Widget statistik ringkas beserta notifikasi otomatis untuk produk yang stoknya menipis (`< 10` unit).
- **🏷️ Kelola Kategori:** Pengelompokan jenis produk makeup dan skincare.
- **🛍️ Katalog Produk:** Manajemen data produk lengkap dengan filter, pencarian, dan penyesuaian stok.
- **🏢 Data Pemasok:** Pencatatan informasi *supplier* resmi.
- **📦 Pembelian Stok:** Fitur *restock* untuk mencatat alur masuk barang dari pemasok.
- **🛒 Kasir Penjualan:** Modul transaksi penjualan yang terintegrasi langsung dengan pengurangan stok otomatis.
- **📋 Laporan Penjualan:** Riwayat transaksi lengkap yang siap dicetak (*Print Ready*).

---

## 🎨 Design System

- **Primary Colors:** Pastel Rose, Soft Pink, Amber/Mocha
- **Typography:** Serif (`Playfair Display`) & Modern Sans (`Figtree`)
- **UI Elements:** Rounded cards (`rounded-3xl`), soft borders, dan permanent side navigation.

---
## Cara Instalasi Lokal
1. Clone repository ini:
   ```bash
   git clone [https://github.com/username-kamu/inventory-sales.git](https://github.com/username-kamu/inventory-sales.git)
   cd inventory-sales

2. Install dependensi:
   Bash
   composer install
   npm install && npm run build

3. Salin .env.example menjadi .env dan sesuaikan konfigurasi database:
   Bash
   cp .env.example .env
   php artisan key:generate

4. Jalankan migrasi database:
   Bash
   php artisan migrate

5. Jalankan server lokal:
   Bash
   php artisan serve

6. Simpan filenya (**`Ctrl + S`**).
7. Setelah itu, kamu bisa lanjut jalankan perintah `git add .` di terminal untuk di-*push* ke GitHub!

<ElicitationsGroup>
<Elicitation>
<Question>Butuh panduan perintah Git selanjutnya untuk push ke GitHub?</Question>
<Options>
<Option text="Ya, minta urutan perintah Git-nya"/>
<Option text="Sudah paham, terima kasih!"/>
</Options>
</Elicitation>
</ElicitationsGroup>

## Akun Pengujian (Login Credentials)
Untuk mencoba fitur aplikasi, kamu bisa masuk menggunakan akun default berikut atau mendaftar akun baru melalui menu **Register**:
- **Email:** admin@gmail.com
- **Password:** password123
  
## Langkah-Langkah Login ke Aplikasi
1. Jalankan server Laravel (`php artisan serve`) dan asset builder (`npm run dev`).
2. Buka browser dan kunjungi `http://127.0.0.1:8000`.
3. Klik tombol **Log in** di pojok kanan atas halaman utama.
4. Masukkan **Email** dan **Password** sesuai kredensial di atas.
5. Klik tombol **Log in** untuk masuk ke halaman **Dashboard StockHub**.

## 🚀 Cara Instalasi Project

1. **Clone Repository:**
   ```bash
   git clone [https://github.com/rayyanputri03-maker/inventory-uts.git](https://github.com/rayyanputri03-maker/inventory-uts.git)
   cd inventory-uts
   
