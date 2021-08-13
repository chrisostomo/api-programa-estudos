#!/bin/sh
docker-php-ext-install pdo_mysql
docker-php-ext-enable pdo_mysql

./composer.phar install
php -S 0.0.0.0:8000 -t public