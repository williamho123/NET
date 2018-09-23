# NET

[This site and repo is no longer actively maintained].

Northwestern Economics Tournament (NET) website. Built with [Laravel](https://laravel.com/), [Materialize](http://materializecss.com/), and [Vue](https://vuejs.org/).

## Configuration

After cloning the repository, navigate to the root project directory and give the commands:
```
composer install
composer dump-autoload
```
to pull-in required dependencies and generate autoload files.

Rename the `.env.example` file to `.env` and set up appropriate environment variables.

Then, run artisan commands:
```
php artisan key:generate
php artisan migrate
```
to generate the application key and run migrations.

Run:
```
php artisan serve
```
and point your browser at **http://localhost:8000/** to see the current state of the website. 




