<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/pangeran-droid/laravel-admin-lte-3"><img src="https://img.shields.io/github/stars/pangeran-droid/laravel-admin-lte-3?style=for-the-badge&logo=github&label=Stars" alt="GitHub Stars"></a>
<a href="https://github.com/pangeran-droid/laravel-admin-lte-3/forks"><img src="https://img.shields.io/github/forks/pangeran-droid/laravel-admin-lte-3?style=for-the-badge&logo=github&label=Forks" alt="GitHub Forks"></a>
<a href="https://github.com/pangeran-droid/laravel-admin-lte-3/issues"><img src="https://img.shields.io/github/issues/pangeran-droid/laravel-admin-lte-3?style=for-the-badge&logo=github&label=Issues" alt="GitHub Issues"></a>
<a href="https://github.com/pangeran-droid/laravel-admin-lte-3/blob/main/LICENSE"><img src="https://img.shields.io/github/license/pangeran-droid/laravel-admin-lte-3?style=for-the-badge" alt="License"></a>
</p>

<p align="center">
<img src="https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.3 or later">
<img src="https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 13">
<img src="https://img.shields.io/badge/AdminLTE-3-3C8DBC?style=for-the-badge" alt="AdminLTE 3">
<img src="https://img.shields.io/badge/FrankenPHP-Octane-111111?style=for-the-badge" alt="FrankenPHP and Laravel Octane">
<img src="https://img.shields.io/badge/Docker%20%7C%20Podman-Containers-2496ED?style=for-the-badge&logo=docker&logoColor=white" alt="Docker and Podman">
</p>

<h1 align="center">Laravel AdminLTE 3</h1>

<p align="center">
A Laravel starter application integrated with <a href="https://adminlte.io">AdminLTE 3</a>. It includes authentication, a dashboard, profile pages, and user management, with FrankenPHP support for local development and Docker or Podman containers.
</p>

| Laravel Version | Branch |
|-----------------|--------|
| 13.x            | main   |

## Requirements

For local development:

- PHP 8.3 or later and Composer
- Node.js and npm
- A database supported by Laravel and configured in `.env`
- FrankenPHP to run the included Octane development script

For containerized development:

- Docker with the Compose plugin, or Podman with a Compose provider
- A database server configured in `.env` (the included container does not start a database)

## Getting started

Clone the repository and enter its directory:

```bash
git clone https://github.com/pangeran-droid/laravel-admin-lte-3.git
cd laravel-admin-lte-3
```

Create your environment file and configure the database connection:

```bash
cp .env.example .env
```

The example environment uses MySQL. Make sure a MySQL server is available and update the database settings in `.env` before migrating.

### Local development

Install dependencies, generate the application key, migrate the database, and build the frontend assets:

```bash
composer install
php artisan key:generate
php artisan migrate
npm install
npm run build
```

Start the application with FrankenPHP and Laravel Octane:

```bash
bash scripts/dev.sh
```

The app is available at [http://localhost:8000](http://localhost:8000). The script expects FrankenPHP to be installed on the host.

Alternatively, start Laravel's built-in development server:

```bash
php artisan serve
```

### Docker Compose

The included `docker-compose.yaml` builds and runs the app with FrankenPHP. It uses host networking, so the app is available on port `8000` and the database host in `.env` must be reachable from the host network.

```bash
docker compose run --build --rm app php artisan key:generate
docker compose up -d
docker compose exec app php artisan migrate --force
```

Open [http://localhost:8000](http://localhost:8000). To view logs or stop the app:

```bash
docker compose logs -f app
docker compose down
```

### Podman

You can use the Compose file with Podman if a Compose provider is installed:

```bash
podman compose run --build --rm app php artisan key:generate
podman compose up -d
podman exec -it laravel-admin-lte-3 php artisan migrate --force
```

Or use the included helper script from the project root:

```bash
bash scripts/run.sh
podman exec -it laravel-admin-lte-3 php artisan migrate --force
```

The helper script stops and removes any existing container named `laravel-admin-lte-3` before rebuilding and starting it. The container uses host networking and listens on port `8000`.

## Credits & technology

- [Laravel](https://laravel.com) - PHP application framework.
- [AdminLTE 3](https://adminlte.io) - Bootstrap-based admin dashboard template.
- [Bootstrap 4](https://getbootstrap.com) - Responsive CSS framework.
- [Font Awesome](https://fontawesome.com) - Icon toolkit.
- [FrankenPHP](https://frankenphp.dev) - PHP application server.
- [Docker](https://www.docker.com) and [Podman](https://podman.io) - Container engines.

## Preview

`login`

<img src="https://raw.githubusercontent.com/pangeran-droid/laravel-admin-lte-3/refs/heads/main/.github/asset/preview/login.png">

***

`register`

<img src="https://raw.githubusercontent.com/pangeran-droid/laravel-admin-lte-3/refs/heads/main/.github/asset/preview/register.png">

***

`dashboard`

<img src="https://raw.githubusercontent.com/pangeran-droid/laravel-admin-lte-3/refs/heads/main/.github/asset/preview/dashboard.png">

***

`profile`

<img src="https://raw.githubusercontent.com/pangeran-droid/laravel-admin-lte-3/refs/heads/main/.github/asset/preview/profile.png">

***

`user management`

<img src="https://raw.githubusercontent.com/pangeran-droid/laravel-admin-lte-3/refs/heads/main/.github/asset/preview/user-management.png">

***

`logout`

<img src="https://raw.githubusercontent.com/pangeran-droid/laravel-admin-lte-3/refs/heads/main/.github/asset/preview/logout.png">

## License

Licensed under the [MIT](LICENSE) license.
