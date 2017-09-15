FROM dmstr/php-yii2:7.2-fpm-5.0-alpha2-alpine-nginx

WORKDIR /app

RUN apk add --update git nodejs openssh \
 && npm install -g yarn

COPY ./src /app/src
COPY ./web /app/web

RUN mkdir -p /app/runtime /app/web/assets \
 && chmod 777 /app/runtime /app/web/assets

ENV PATH=/app/pkg/vendor/bin:${PATH}