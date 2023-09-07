#!/bin/sh

# Start PHP-FPM in the background
php-fpm -D

# Start nginx in the foreground
nginx -g "daemon off;"

cd /var/www/laravel-app

composer update
composer install
