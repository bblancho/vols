FROM php:8.0-apache

# Installation des dépendances nécessaires
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y libicu-dev libpq-dev libzip-dev zip && \
    docker-php-ext-install intl pdo pdo_mysql pdo_pgsql zip && \
    pecl install apcu && \
    docker-php-ext-enable apcu && \
    rm -rf /var/lib/apt/lists/*

# Copie du code source de l'application
COPY . /var/www/html

# Configuration du serveur Apache
RUN a2enmod rewrite

# Configuration de PHP
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Configuration de l'environnement
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=database
ENV MYSQL_USER=user
ENV MYSQL_PASSWORD=password

# Configuration de la base de données MySQL
COPY ./docker/mysql/ /docker-entrypoint-initdb.d/

RUN chown -R www-data:www-data /var/www/html/ && \
    a2enmod rewrite