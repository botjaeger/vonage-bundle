FROM php:7.4-cli-alpine
WORKDIR /var/www/nexmo-bundle

COPY . /var/www/nexmo-bundle
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apk add -q --no-cache bash

# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PATH="${PATH}:/root/.composer/vendor/bin"

