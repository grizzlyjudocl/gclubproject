FROM php:7.3-fpm-alpine

WORKDIR /usr/share/nginx/html

RUN apk update && apk --no-cache add zip postgresql-dev && rm -rf /var/cache/apk/*
RUN docker-php-ext-install pdo pdo_pgsql