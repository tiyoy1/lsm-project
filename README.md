# LSM Project

Aplikasi web Laravel untuk kebutuhan internal SMK Metland. Repository ini berisi source code aplikasi, sedangkan file `.env` tidak disimpan di repository karena berisi konfigurasi sensitif.

## Tech Stack

- Laravel 12
- PHP 8.2+
- MySQL
- Filament 5
- Vite + Tailwind CSS

## Requirements

- PHP 8.2 atau lebih baru
- Composer
- Node.js dan npm
- MySQL atau database yang sesuai dengan konfigurasi aplikasi
- Extension PHP umum untuk Laravel seperti `openssl`, `pdo`, `mbstring`, `tokenizer`, `xml`, `ctype`, `json`, dan `fileinfo`

## Environment Setup

Karena file `.env` tidak disimpan di repository, langkah pertama setelah clone adalah membuat file environment dari template yang sudah tersedia.

```bash
cp .env.example .env
```

Pada server production, sesuaikan nilai berikut minimal:

- `APP_NAME`
- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_URL`
- `DB_CONNECTION`
- `DB_HOST`
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`
- `MAIL_*` jika sistem email dipakai
- `QUEUE_CONNECTION` jika worker queue dijalankan

Template `.env.example` juga sudah menyiapkan variabel admin awal untuk Filament:

- `ADMIN_NAME`
- `ADMIN_EMAIL`
- `ADMIN_PASSWORD`

## Local Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
```

Jika ingin mengisi data awal termasuk akun admin, jalankan seeder bawaan aplikasi:

```bash
php artisan db:seed
```

## Deployment Steps

Urutan deploy yang disarankan untuk ICT:

1. Clone repository ke server.
2. Buat file `.env` dari `.env.example`.
3. Isi konfigurasi production pada `.env`.
4. Install dependency PHP dengan mode production.

```bash
composer install --no-dev --optimize-autoloader
```

5. Generate application key jika belum ada.

```bash
php artisan key:generate
```

6. Jalankan migrasi database.

```bash
php artisan migrate --force
```

7. Jalankan seeder jika dibutuhkan data awal atau akun admin.

```bash
php artisan db:seed --force
```

8. Install dependency frontend dan build asset.

```bash
npm install
npm run build
```

9. Buat symbolic link storage jika aplikasi menggunakan file upload.

```bash
php artisan storage:link
```

10. Optimasi cache aplikasi.

```bash
php artisan optimize
php artisan filament:optimize
```

## Production Notes

- Pastikan `APP_ENV=production` dan `APP_DEBUG=false`.
- Pastikan folder `storage` dan `bootstrap/cache` memiliki permission tulis.
- Jika menggunakan queue, jalankan worker dengan supervisor atau service manager.
- Jika menggunakan scheduler, tambahkan cron job untuk `php artisan schedule:run`.
- Pastikan OPcache aktif di server production.

## Post-Deployment Check

Setelah deploy, verifikasi hal berikut:

- Homepage dapat diakses sesuai `APP_URL`
- Login admin Filament berjalan normal
- Form input dan upload file berfungsi
- Data dari database tampil dengan benar
- Tidak ada error di log aplikasi

## API

### Testimonials

- Endpoint: `GET /api/testimonials`
- Query param opsional: `featured_only=1`

Contoh penggunaan:

```js
const response = await fetch('/api/testimonials?featured_only=1');
const data = await response.json();
console.log(data.data);
```

## Troubleshooting

- Jika aplikasi gagal jalan, cek dulu isi `.env` dan nilai `APP_KEY`.
- Jika migrasi gagal, periksa koneksi database dan hak akses user database.
- Jika asset frontend tidak tampil, ulangi `npm run build`.
- Jika upload file gagal, pastikan `storage:link` sudah dibuat dan permission folder benar.

## License

Proyek ini mengikuti lisensi MIT sesuai Laravel skeleton bawaan.
