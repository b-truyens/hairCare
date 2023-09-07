FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip curl unzip git nginx && apt-get clean
RUN apt-get update && apt-get install -y sudo

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . /var/www

# Copy the nginx config
COPY default.conf /etc/nginx/sites-available/default
COPY start.sh /start.sh

# Give execute permissions to the start script
RUN chmod +x /start.sh

# Set permissions for project
RUN chown -R www-data:www-data /var/www

# Set the working directory to the Laravel app directory
WORKDIR /var/www/laravel-app/

# Install PHP dependencies using Composer
RUN composer install --no-scripts --no-autoloader --no-dev

# Optimize Composer for production
RUN composer dump-autoload --optimize

# Set the command to run your start script
CMD ["/start.sh"]


