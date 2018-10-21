# Biodata
Biodata merupakan aplikasi sederhana berbasis web yang menggunakan framework laravel 5.5. Biodata memiliki fitur untuk menerima inputan seperti nama,email,tanggal lahir,telepon,gender, dan alamat. Inputan tersebut nantinya akan disimpan pada folder storage/app/ dalam bentuk file txt. Setiap inputan dipisahkan menggunakan tanda koma(",").  Selain itu inputan dapa ditampilkan melalui halaman web dengan mengakses "http://localhost/form/(inputan nama)-(waktu pembuatan)".

# Deploy Untuk Penggunaan Local Server
## Install Depedency
Melakukan instalasi sekumpulan library yang dibutuhkan oleh aplikasi laravel. Untuk melakukan instalasi arahkan path pada cmd ke folder aplikasi yang telah di unduh, kemudian gunakan perintah berikut


```$ composer install```

## Setup Environment Variable
Melakukan setup environment variable dengan menyalin contoh file .env.example ke file baru bernama .env . Gunakan perintah berikut untuk menyalin file.

```$ copy .env.example .env```

Biasanya dalam file .env.example tidak memiliki APP_KEY Hal ini dapat menyebabkan error ketika file dijalankan. Oleh karena itu gunakan perintah berikut untuk mendapatkan APP_KEY

```$ php artisan key:generate```

## Run Local Dev Server
Langkah terakhir menjalankan local server. Gunakan perintah berikut untuk menjalankan local server.

```$ php artisan serve```
