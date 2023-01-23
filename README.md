<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## Cara Clone

Jalankan perintah berikut di folder tempat kerja anda

```
git clone https://github.com/rofiuddin15/gis-apps.git
```

masuk ke folder yang sudah di clone atau di download dan jalankan perintah selanjutnya, ikuti langkah berikut:

```
cd gis-apps
composer install
php artisan key:generate
```

## Cara Menyambungkan ke database

Ubah bagian ini pada file ```.env``` untuk melakukan koneksi ke database.

```
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```
## Cara menjalankan laravel
untuk menjalankan laravel, jalankan perintah berikut pada terminal:
```
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
