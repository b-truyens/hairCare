#!/bin/sh

# Navigate to the Laravel app directory
cd /var/www/laravel-app

# Run composer commands
composer update
composer install

# Start PHP-FPM in the background
php-fpm -D

# Start nginx in the foreground
nginx -g "daemon off;"

