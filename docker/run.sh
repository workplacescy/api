#!/bin/sh

php artisan migrate --force --no-interaction \
&& php artisan optimize \
&& php artisan serve -vvv --host 0.0.0.0 --port 8080
