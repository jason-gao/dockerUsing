#!/bin/bash

docker-php-ext-install mysqli
docker-php-ext-install pdo_mysql
pecl install redis
docker-php-ext-enable redis

php -m
