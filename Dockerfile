FROM dmstr/php-yii2:dev-alpine-nginx

WORKDIR /app

#RUN rm /etc/nginx/conf.d/default.conf

RUN apk add --update git nodejs openssh \
 && npm install -g yarn

COPY ./src /app/src
COPY ./web /app/web

RUN mkdir /app/runtime /app/web/assets \
 && chmod 777 /app/runtime /app/web/assets

ENV PATH=/app/pkg/vendor/bin:${PATH}