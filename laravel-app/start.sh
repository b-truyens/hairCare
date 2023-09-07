#!/bin/sh

# Start PHP-FPM in the background
/usr/local/sbin/php-fpm -D

# Start nginx in the foreground
nginx -g "daemon off;"