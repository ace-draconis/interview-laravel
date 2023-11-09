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
php artisan config:cache
```

2. Given that the db migration and seeding succeeded, API endpoints should be exposed at

```bash
http://localhost:8080/api
```

3. New API collection is in `./api/test/OpenApiSpec.yaml`
4. To test the API, register a new user and login to receive `<token>`.
5. for API Authentication, please add `Bearer <token>` at Request Header
6. For Github Action deployment test, can refer to `https://github.com/ace-draconis/interview-laravel/actions/workflows/docker-image.yml`
7. For Laravel deployment test, Static Analysis, and API Test can refer to `https://github.com/ace-draconis/interview-laravel/actions/workflows/laravel.yml`
