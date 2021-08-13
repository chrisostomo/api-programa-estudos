#!/bin/sh
./composer.phar install
php -S 0.0.0.0:8000 -t public