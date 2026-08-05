FROM php:8.2-fpm

WORKDIR /var/www

RUN docker-php-ext-install pdo pdo_mysql

COPY . .

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache