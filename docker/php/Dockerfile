FROM php:7.2-apache
COPY src/ /var/www/html/
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install mysqli -j$(nproc) gd \
    && docker-php-ext-enable mysqli