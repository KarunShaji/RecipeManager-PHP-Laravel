<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Recipe Management Backend Project

This project is a backend application built with PHP Laravel for managing recipes. It provides APIs for performing CRUD operations on recipes and includes authentication for secure access.

## Requirements

- PHP (>= 8.2)
- Composer
- MySQL or other supported database server

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/KarunShaji/RecipeManager-PHP-Laravel
   ```
2. **Navigate to the project directory:**

```bash
cd RecipeManager-PHP-Laravel
```

3. **Install PHP dependencies:**
 ```bash
composer install
```
4. **Configure your database settings in the .env file:**
 ```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
5. **Run the database migrations:**
 ```bash
php artisan migrate
```
6. **Serve the application:**
```bash
php artisan serve
```
## Testing API Endpoints in Postman

### 1. Sign Up
- **Method:** POST
- **Endpoint:** `/api/signup`
- **Description:** Use this endpoint to sign up a new user.

### 2. Login
- **Method:** POST
- **Endpoint:** `/api/login`
- **Description:** Use this endpoint to log in with existing user credentials.

### 3. Authenticated Routes
The following routes require authentication with JWT tokens. After signing up or logging in, use the returned token in the `Authorization` header for subsequent requests.

#### Create a Recipe
- **Method:** POST
- **Endpoint:** `/api/create`
- **Description:** Use this endpoint to create a new recipe.

#### Get All Recipes
- **Method:** GET
- **Endpoint:** `/api/products`
- **Description:** Use this endpoint to get all recipes.

#### Get Recipe Details
- **Method:** GET
- **Endpoint:** `/api/products/{id}/details`
- **Description:** Use this endpoint to get details of a specific recipe by its ID.

#### Update Recipe Details
- **Method:** POST
- **Endpoint:** `/api/products/{id}/update`
- **Description:** Use this endpoint to update details of a specific recipe by its ID.

#### Delete Recipe
- **Method:** DELETE
- **Endpoint:** `/api/products/{id}/delete`
- **Description:** Use this endpoint to delete a specific recipe by its ID.

### 4. Logout
- **Method:** POST
- **Endpoint:** `/api/logout`
- **Description:** Use this endpoint to log out.


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


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
