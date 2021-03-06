FROM dmstr/php-yii2:7.2-fpm-5.0-alpha3-alpine-nginx

WORKDIR /app

COPY ./src /app/src
COPY ./public /app/public
COPY composer.json composer.lock package.json /app/

RUN mkdir -p /app/runtime /app/web/assets \
 && chmod 777 /app/runtime /app/web/assets

ENV PATH=/app/pkg/vendor/bin:${PATH}