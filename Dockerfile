FROM schmunk42/dev.yiiframework.php:7.1.9-apache

RUN curl -sL https://deb.nodesource.com/setup_8.x | bash - \
 && apt-get update \
 && apt-get install -y nodejs \
 && npm install -g yarn

WORKDIR /app

COPY ./src /app/src
COPY ./public /app/public

RUN mkdir -p /app/runtime /app/public/assets \
 && chmod 777 /app/runtime /app/public/assets

ENV PATH=/app/vendor/bin:${PATH}

RUN rm /var/www/html && ln -s /app/public /var/www/html
