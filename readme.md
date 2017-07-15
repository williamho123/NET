# NET

Repository for the Northwestern Economics Tournament (NET) website. Built with the [Laravel Framework](https://laravel.com/).

## Configuration

After cloning the repository, navigate to the root project directory and give the commands:
```
composer install
composer update
composer dump-autoload
```
to pull-in required dependencies and generate autoload files. [Composer](https://getcomposer.org/) is needed for these commands.

Then, run migrations:
```
php artisan migrate
```

Run:
```
php artisan serve
```
and point your browser at **http://localhost:8000/** to see the current state of the website. 

Not all back-end features will function correctly if services like MySQL are not installed, but general views should be accessible.




