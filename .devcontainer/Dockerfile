FROM php:8.2-apache
RUN apt-get update && apt-get install -y \
        libpq-dev \
        libzip-dev 
RUN docker-php-ext-install mysqli
