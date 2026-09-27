# Homework 5 - Laravel Artisan Commands

## Part 1

### 1. Command used to create a symbolic link for the storage folder

```bash
php artisan storage:link
```

This command creates a symbolic link between `public/storage` and `storage/app/public`.

### 2. Command used to create a Product model

```bash
php artisan make:model Product
```

### 3. Command used to create a controller for the Product model

Regular controller:

```bash
php artisan make:controller ProductController
```

Resource controller:

```bash
php artisan make:controller ProductController --resource
```

Resource controller connected to the Product model:

```bash
php artisan make:controller ProductController --model=Product --resource
```

### 4. Command used to create a migration for the Product model

```bash
php artisan make:migration create_products_table
```

A model and migration can also be created together with:

```bash
php artisan make:model Product -m
```

### 5. Command used to create a seeder for the Product model

```bash
php artisan make:seeder ProductSeeder
```

### 6. Command used to create a factory for the Product model

```bash
php artisan make:factory ProductFactory --model=Product
```

### 7. Command used to list all available routes

```bash
php artisan route:list
```

### 8. Migration commands

Run migrations:

```bash
php artisan migrate
```

Roll back the last migration batch:

```bash
php artisan migrate:rollback
```

Refresh migrations:

```bash
php artisan migrate:refresh
```

Run migrations with seeders:

```bash
php artisan migrate --seed
```

Refresh migrations and run seeders:

```bash
php artisan migrate:refresh --seed
```

---

# Part 2

The following Laravel files were created.

## Product Model

```text
app/Models/Product.php
```

## Product Migration

```text
database/migrations/2026_09_27_123115_create_products_table.php
```

## Product Resource Controller

```text
app/Http/Controllers/ProductController.php
```

The resource controller includes the following default methods:

- `index`
- `create`
- `store`
- `show`
- `edit`
- `update`
- `destroy`

## Product Views

The following Blade view files were created inside:

```text
resources/views/products/
```

### index.blade.php

```html
<!DOCTYPE html>
<html>
<head>
    <title>Product View</title>
</head>
<body>

</body>
</html>
```

### edit.blade.php

```html
<!DOCTYPE html>
<html>
<head>
    <title>Product Editing</title>
</head>
<body>

</body>
</html>
```

### create.blade.php

```html
<!DOCTYPE html>
<html>
<head>
    <title>New Product Creation</title>
</head>
<body>

</body>
</html>
```

## Resource Route

The Product resource route was registered with:

```php
Route::resource('products', ProductController::class);
```

The routes were verified with:

```bash
php artisan route:list
```

---

# Questionnaire

## 1. What is the purpose of the storage:link Artisan command, and why is it commonly used in Laravel applications?

The `storage:link` command creates a symbolic link between `public/storage` and `storage/app/public`. It is commonly used so files stored by the application, such as images or uploads, can be accessed publicly.

## 2. What is a Laravel model, and what role would a Product model play in an application?

A Laravel model represents application data and communicates with the database through Eloquent ORM. A Product model would represent product records in the application.

## 3. What is the difference between a regular controller and a resource controller in Laravel?

A regular controller is created without predefined CRUD methods. A resource controller automatically creates the standard methods used to manage a resource.

## 4. What are the default methods generated when creating a resource controller? Name at least four of them.

The default methods are:

- `index`
- `create`
- `store`
- `show`
- `edit`
- `update`
- `destroy`

## 5. What is a migration, and why are migrations important for database management in Laravel?

A migration defines changes to the database structure using PHP code. Migrations are important because they allow database changes to be tracked, shared, and reproduced.

## 6. What is the purpose of a seeder, and when would you use one in a project?

A seeder inserts predefined data into the database. It can be used for initial data or sample data during development.

## 7. What is a factory, and how does it help during application development and testing?

A factory automatically generates sample model data. It is useful for quickly creating test records during development and testing.

## 8. Why is it useful to list all application routes, and what information can be obtained from the route list?

The route list helps verify the URLs and actions available in the application. It shows information such as the HTTP method, URI, route name, and controller action.