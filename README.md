# foxy-roxy-rabbit

:rotating_light: **Draft - work in progress...** :rotating_light: 

A dockerized application template for Yii 2.1 Framework

Try out the installation and setup steps on [Play with Docker](http://labs.play-with-docker.com/)

## Installation

Get the source

    git clone https://github.com/schmunk42/foxy-roxy-rabbit.git
    cd foxy-roxy-rabbit

Install packages

    docker-compose run --rm phd composer install

## Setup

Start container

    docker-compose up -d

Open `http://docker.local:21000` in your browser.

## Usage

Execute a shell in a running container

    docker-compose exec phd sh

Create controller

    $ yii gii/controller --appconfig=/app/src/config/main.php --controllerClass="app\controllers\SiteController"

Show Gii web-inteface by running the route `/?r=gii`.
