FROM php:7.4.1-fpm
COPY php.ini /usr/local/etc/php/

RUN apt-get update \
  && apt-get install -y zlib1g-dev libzip-dev zip mariadb-client-10.3 libpng-dev libjpeg-dev curl wget \
  && docker-php-ext-install zip pdo_mysql

#Composer install
COPY --from=composer /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin


WORKDIR /var/www

RUN composer global require "laravel/installer"