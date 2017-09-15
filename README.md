# foxy-roxy-rabbit

:rotating_light: Draft - work in progress...

A dockerized application template for Yii 2.1 Framework

## Installation

    docker-compose run --rm phd composer install

## Setup

Start container

    docker-compose up -d

Open `http://docker.local:21000` in your browser.

Enter running container

    docker-compose exec phd sh

## Usage

Create controller

    $ yii gii/controller --appconfig=/app/src/config/main.php --controllerClass="app\controllers\SiteController"