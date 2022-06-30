# Category

## Installation

Clone project

```
git clone https://github.com/scm-KaungKhantKyaw/category.git
```

Go to project folder
```
cd category
```

Install dependencies
```
composer install
```

Enviromnent Setup
```
cp .env.example .env
```

Generate key
```
php artisan key:generate
```

Setup database in `.env` file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=category
DB_USERNAME=root
DB_PASSWORD=
```

Migrate database
```
php artisan migrate:refresh --seed
```

Run below command
```
php artisan serve
```