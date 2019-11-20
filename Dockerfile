FROM php:7.2-cli

RUN mkdir /php-addons-ds
WORKDIR /php-addons-ds

RUN apt-get update
RUN apt-get install -y git zip unzip
RUN pecl install xdebug-2.6.0

RUN curl --silent --show-error https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
