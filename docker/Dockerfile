FROM php:8.2-fpm

# Install dependencies, including libicu-dev for intl
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath zip opcache

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy files and install dependencies
COPY . .
RUN composer install --optimize-autoloader --no-dev --no-interaction --prefer-dist

# Optimize Laravel
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Ensure storage is writable
RUN chown -R www-data:www-data /var/www/html/storage
