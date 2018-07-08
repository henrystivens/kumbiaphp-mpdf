FROM php:7.2-apache

RUN apt-get update \
 && apt-get install -y \
    git \
    zlib1g-dev \
    mysql-client \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng-dev \
 && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
 && docker-php-ext-install zip opcache mysqli pdo pdo_mysql mbstring gd bcmath \
 && a2enmod rewrite \
 && sed -i 's!/var/www/html!/var/www/default/public!g' /etc/apache2/apache2.conf \
 && sed -i 's!/var/www/html!/var/www/default/public!g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www