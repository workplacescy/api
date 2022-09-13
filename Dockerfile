FROM php:8.1-fpm-alpine

LABEL fly_launch_runtime="laravel"

RUN docker-php-ext-enable opcache
RUN curl -sS --compressed https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY docker/init.sh /
COPY docker/php/ ${PHP_INI_DIR}/

COPY --chown=www-data:www-data composer.* ./

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_CACHE_DIR /dev/null

RUN composer install --no-autoloader --no-dev --no-interaction --no-scripts

COPY --chown=www-data:www-data . .

ARG APP_ENV

RUN set -eux ; \
    chown -R www-data:www-data vendor ; \
    chmod -R -x+X . ; \
    composer dump-autoload --classmap-authoritative --no-interaction

EXPOSE 8080

CMD "/init.sh"
