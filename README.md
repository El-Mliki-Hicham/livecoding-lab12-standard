## Create new Laravel project
```bash
composer create-project --prefer-dist laravel/laravel:^9.0 project-manager
```

> Add following packages into composer.json while using it with Laravel 9.
```json
 "require": {
     "infyomlabs/laravel-generator": "^5.0",
     "infyomlabs/adminlte-templates": "^5.0",
     "doctrine/dbal": "~2.3"
 }  
 ```
> composer update

```bash
php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"
```
 
```bash
php artisan infyom:publish --localized
```

```bash
composer require infyomlabs/laravel-ui-adminlte
```

```bash
php artisan ui adminlte --auth
```

```bash
npm install && npm install laravel-mix --save-dev && npm run dev
```

```bash
php artisan make:migration create_projects_table
```

```bash
php artisan migrate
```

```bash
php artisan infyom:scaffold Project --fromTable --table=projects
```
