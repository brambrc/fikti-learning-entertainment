<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Tutorial
1. Pertama silahkan klik tombol fork yang ada pada pojok kanan atas, agar kalian dapat repository sendiri dari repo ini.
2. Selanjutnya silahkan clone templatenya dari repository yang baru saja kalian fork.
3. Setelah berhasil di clone, jalankan perintah `composer install` atau `composer update`
4. Silahkan buat database baru pada local kalian, selanjutnya rename file `env.example` menjadi `.env`, kemudian isi bagian database dengan nama database, username database, dan password database kalian (apabila tidak menggunakan password, harap dibiarkan kosong) yang baru kalian buat.
5. Jalankan perintah `php artisan migrate`, kemudian jalankan perintah `php artisan generate:key`
6. Bila sudah kalian bisa langung menjalankan local development server menggunakan perintah `php artisan serve`
7. Happy Coding !!

## Tutorial 2
1. Kalian bisa menggunakan url `http://localhost:8000/register` atau `127.0.0.1:8000/register` untuk mengakses halaman register saat pertama kali, dan membaut akun admin agar bisa login kedalam sistem admin yang sudah disediakan.
2. Kalian bisa menggunakan url `http://localhost:8000/login` atau `127.0.0.1:8000/login` untuk mengakses halaman login dan admin yang sudah disediakan.

## Template
Berikut merupakan template asli yang digunakan untuk bagian frontend dan admin sebegai refrensi apabila ingin menggunakan kompenen lainnya pada template tersebut:
- admin `https://technext.github.io/AdminX/`
- frontend `http://themescare.com/demos/filmoja-view/index.html`

## Dokumentasi
Kalian bisa pelajari dokumentasi laravel 6 lebih lanjut di url ini : `https://laravel.com/docs/6.x`

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.



## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
