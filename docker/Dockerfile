FROM php:7.4-fpm-alpine as galar-api-php-prod

# use Unix socket for FPM
COPY ./docker/fpm.conf /usr/local/etc/php-fpm.d/zz-docker.conf

RUN mv /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
RUN echo "Europe/Berlin" >> /etc/timezone && echo "date.timezone=\"Europe/Berlin\"" >> /usr/local/etc/php/php.ini

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /galar
COPY . /galar

RUN composer install --no-dev --no-interaction --no-suggest

CMD ["php-fpm"]

FROM galar-api-php-prod as galar-api-php-dev

CMD ["php-fpm"]

