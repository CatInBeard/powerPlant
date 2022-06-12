FROM ubuntu:latest
ARG DEBIAN_FRONTEND=noninteractive
ARG PHP_V=8.1

WORKDIR /var/www/

RUN apt update &&\
    apt install apache2 libapache2-mod-php${PHP_V} php${PHP_V}-cli php${PHP_V}-common php${PHP_V}-curl php-json php${PHP_V}-mbstring php${PHP_V}-gd php${PHP_V}-intl php${PHP_V}-mysql php${PHP_V}-opcache php${PHP_V}-readline php${PHP_V}-xml php${PHP_V}-xsl php-soap cron composer -y 

COPY . .

RUN mkdir log &&\
    touch log/access.log &&\
    touch log/action.log &&\
    touch log/error.log &&\
    composer install
RUN chown www-data:www-data . -R
RUN chmod 755 . -R

COPY apache/apache2.conf /etc/apache2/apache2.conf
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

EXPOSE 80

CMD apachectl -D FOREGROUND