#!/bin/sh

set -eux ; \
    php artisan migrate --force --no-interaction; \
    php artisan optimize; \
    php artisan serve --host 0.0.0.0 --port 8080
