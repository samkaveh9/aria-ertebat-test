## Project setup


#### setup composer
```
composer install
```

### copy .env.example file to .env

#### generate application key
```
php artisan key:generate
```

#### create a database and then migrate the tables
```
php artisan migrate
```

#### then serve the application.
```
php artisan serve
```
