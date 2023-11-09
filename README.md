# interview-laravel

## Installation

1. How to use this project is below.

```bash
cp .env.example .env
cd src/
cp .env.example .env
docker compose up -d
# setup laravel
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed

```

2. Given that the db migration and seeding succeeded, API endpoints should be exposed at

```bash
http://localhost:8080/api
```
