#
# OriginPHP Framework
# Copyright 2018 - 2021 Jamiel Sharief.
#
# Licensed under The MIT License
# The above copyright notice and this permission notice shall be included in all copies or substantial
# portions of the Software.
#
# @copyright    Copyright (c) Jamiel Sharief
# @link         https://www.originphp.com
# @license      https://opensource.org/licenses/mit-license.php MIT License
#
FROM ubuntu:20.04
LABEL maintainer="Jamiel Sharief"
LABEL version="2.2.0"

# Setup Environment
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV DATE_TIMEZONE UTC
ENV DEBIAN_FRONTEND=noninteractive

# Best Practice : Cache Busting - Prevent cache issues run as one command
# @link https://docs.docker.com/develop/develop-images/dockerfile_best-practices/

RUN apt-get update && apt-get install -y \
    curl \
    git \
    mysql-client \
    nano \
    unzip \
    wget \
    zip \
    apache2 \
    libapache2-mod-php \
    php \
    php-apcu \
    php-cli \
    php-common \
    php-curl \
    php-imap \
    php-intl \
    php-json \
    php-mailparse \
    php-mbstring \
    php-mysql \
    php-opcache \
    php-pear \
    php-readline \
    php-soap \
    php-xml \
    php-zip \
    php-dev \
    postgresql-client \
    php-pgsql \
    php-memcached \
    sqlite3 \ 
    php-sqlite3 \
    php-redis \
    php-xdebug \
    cron \
 && rm -rf /var/lib/apt/lists/*


COPY . /var/www

RUN chown -R www-data:www-data /var/www
RUN chmod -R 0775 /var/www

# Setup Web Server
RUN mkdir /etc/apache2/ssl
RUN openssl req -x509 -sha256 -nodes -newkey rsa:4096 -days 3650 -keyout /etc/apache2/ssl/privateKey -out /etc/apache2/ssl/certificate -subj "/CN=localhost" -extensions EXT -config /var/www/config/docker/ssl.conf
RUN a2enmod rewrite ssl

ADD config/docker/apache.conf /etc/apache2/sites-enabled/000-default.conf

WORKDIR /var/www

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-interaction

RUN echo 'apc.enable_cli=1' >>  /etc/php/7.4/cli/php.ini

CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]