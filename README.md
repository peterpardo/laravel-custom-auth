# Custom Laravel Authentication
I created this simple project tom familiarize myself with building manual authentication with Laravel

## Technologies used
- Blade Templates
- Flowbite - a Tailwindcss component library
- Alpinejs - I used this for showing the password when user is creating an account

## Project Screenshots:
**Login Page**
![screencapture-127-0-0-1-8000-login-2023-11-29-22_19_39](https://github.com/peterpardo/laravel-custom-auth/assets/57168579/0fc0e833-c562-4c41-b122-8d77311d19af)

**Sign Up Page**
![screencapture-127-0-0-1-8000-register-2023-11-29-22_21_08](https://github.com/peterpardo/laravel-custom-auth/assets/57168579/8f86f9d8-a342-409d-bfb7-1e4b59f694ac)

**Login Page - Sample Error Message**
![screencapture-127-0-0-1-8000-login-2023-11-29-22_21_30](https://github.com/peterpardo/laravel-custom-auth/assets/57168579/3a10ddfe-555d-4465-837b-9ad622f736ac)

**Sign Up Page - Sample Error Message**
![screencapture-127-0-0-1-8000-register-2023-11-29-22_22_18](https://github.com/peterpardo/laravel-custom-auth/assets/57168579/40e911c8-006c-4ed6-b8cb-0e7b9c93df19)

## How to run project locally
1. Clone the Project:
```
git clone <repository_url>
```
2. Install Composer Dependencies:
```
composer install
```
3. Copy Environment File:
```
cp .env.example .env
```
4. Generate Application Key:
```
php artisan key:generate
```
5. Create Database:
- Create a new database for your Laravel application. Update the database configuration in the .env file with your database credentials.
6. Run Migrations and Seed Database:
```
php artisan migrate
php artisan db:seed
```

## Additional Steps:
7. Install NPM Dependencies:
- I'm using Tailwindcss here through npm.
```
npm install
```
8. Compile Assets:
- Don't use the generated URL here
```
npm run dev
``` 
9. Serve the Application:
- Use this one
- This will start the development server, usually at http://127.0.0.1:8000
```
php artisan serve
``` 
10. Access the Application:
- Open a web browser and go to http://127.0.0.1:8000 to view your Laravel application.
