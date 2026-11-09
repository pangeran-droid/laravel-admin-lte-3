<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel AdminLTE 3

A Laravel starter template integrated with [AdminLTE 3](https://adminlte.io) and a ready-made database to speed up your application development.

AdminLTE 3 for laravel.

| Laravel Version | Branch |
|-----------------|--------|
| 13.0            | main   |

## Requirements

## installation

Clone the repository and enter the project directory:

```bash
git clone https://github.com/pangeran-droid/laravel-admin-lte-3.git
cd laravel-admin-lte-3
```

Install PHP and JavaScript dependencies:

```bash
composer install
npm install
```

Create the environment file and generate the application key:

```bash
cp .env.example .env
php artisan key:generate
```

Configure the database in `.env`, then run the migrations:

```bash
php artisan migrate
```

Build the frontend assets:

```bash
npm run build
```

Start the local development server:

```bash
php artisan serve
```

Open [http://localhost:8000](http://localhost:8000) in your browser.

### Using the setup script

The project also provides a setup script that runs the main installation steps:

```bash
https://github.com/pangeran-droid/laravel-admin-lte-3.git
```

## Credits & Technology

The Laravel AdminLTE 3 project was built using several libraries and open-source packages (open-source) third parties. A lot of thanks to the web community:

- [Laravel](https://laravel.com) - Open source PHP framework for web artisan.
- [AdminLTE v3](https://adminlte.io) - Bootstrap-based open-source admin dashboard template 4.
- [Bootstrap 4](https://getbootstrap.com) - CSS framework for responsive web design.
- [Font Awesome](https://fontawesome.com) - A collection of vector icons and web toolskits.

## Preview

`login`

<img src="">

***

`register`

<img src="">

***

`dashboard`

<img src="">

***

`profile`

<img src="">

***

`user list`

<img src="">

***

`logout`

<img src="">

## License

Licensed under the [MIT](LICENSE) license.
