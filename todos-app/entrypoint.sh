#!/bin/sh
set -e
if [ ! -d "vendor" ]; then
  composer install 
  echo 'complete install composer'
fi
if [ ! -d "node_modules" ]; then
  npm install
  echo 'complete install node_modules'
fi
if [ ! -s ".env" ]; then
    cp /var/www/.env.example /var/www/.env
    php artisan key:generate
    cd /var/www/
    php artisan migrate
    echo 'complete create env'
fi
php-fpm

exec "$@"