FROM composer:1.7.3 AS composer
FROM php:7.1-cli

RUN apt-get -qq update \
    && apt-get -qq -y install zlib1g-dev unzip \
    && docker-php-ext-install zip > /dev/null

COPY --from=composer /usr/bin/composer /usr/bin/composer
