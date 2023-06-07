<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About The Sistem
Sistem dibuat menggunakan framework laravel dibuat untuk kebutuhan penunjang pekerjaan dan mencari kode pos. Dan untuk CSS menggunakan framework Bootstrap.

## How To Use
1. First step Clonning Git
```
git clone https://github.com/justnaf/sistem_kodepos.git
```
2. Composer And NPM Install
```
composer install
npm install
```
3. rename .env.example to .env
4. run this
```
php artisan migrate
php artisan db:seed
php artisan key:generate
```
5. and for running the web
```
npm run dev
php artisan serve
```

## Overview

#### Halaman Awal
Pada halaman awal terdapat indikator untuk melihat jumlah kode pos yang terdapat pada database dan button upload serta button hapus untuk menghapus data pada tabel untuk cek kode pos.

<img src="https://github.com/justnaf/sistem_kodepos/blob/main/public/overview/Halaman%20Awal.png" width="500px">

#### Halaman Upload
Pada halaman upload terdapat terdapat dua card upload untuk mengupload kodepos yang akan di cek serta mengupload database kode yang didapat dari divisi lain. Database kodepos tidak dapat dipertotonkan karena ada yang menjadi rahasia perusahaan. Dan untuk yang ingin menggunakan dapat mengupload database dengan ketentuan kodepos, kelurahan, kecamtana, kabupaten, dan provinsi.

<img src="https://github.com/justnaf/sistem_kodepos/blob/main/public/overview/Halaman%20Upload.png" width="500px">

#### Delete Alert
Peringatan untuk mendelete data fitur direquest dari pekerja yang akan menggunakan agar ada pemberitahuan agar data akan dihapus

<img src="https://github.com/justnaf/sistem_kodepos/blob/main/public/overview/Delete%20excel%20export.png" width="500px">
<img src="https://github.com/justnaf/sistem_kodepos/blob/main/public/overview/Delete%20Data%20Base.png" width="500px">
