# Forum App

A web app to allow like-minded users interact and share knowledge

For quick navigation:

-   [Code of Conduct](#coc)
-   [Contribution Guide](#contribute)
-   [Learning Laravel](#learn-laravel)
-   [License](#license)

## <a name="coc"></a> Code of Conduct

Please read FG Expense Tracker's [Code of Conduct](https://github.com/hngi/expenseng/blob/master/CODE_OF_CONDUCT.md). It is important that you follow the code to ensure that we all remain professional and fair to each other.

## <a name="contribute"></a> Contribution Guide

### Setting up your workspace

Before running this app, locally make sure you have the following software installed:

-   XAMPP or it's equivalent
-   NPM
-   Composer

Now, follow this steps to start contributing:

1. Clone this repository with `git clone https://github.com/papa28x4/forum-app.git`
2. Run `cd expenseng`
3. Run `composer install`
4. Run `npm install`
5. Run `php artisan key:generate --show` to retrieve a base64 encoded string for Laravel's `APP_KEY` in `.env`
6. Run `php artisan serve` from your terminal and the app will be running on `http://127.0.0.1:8000/`
7. This project makes use of Laravel mix, and so all scripts and stylesheets are in the resources folder. When you run `npm run dev`, they will be compiled and written to the `public` folder.

