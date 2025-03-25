FROM php:8.2-apache

# Instala dependencias necesarias
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    zip \
    curl

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia el código de la kata
COPY . /var/www/html/

# Establece el working dir
WORKDIR /var/www/html

# Instala dependencias PHP (como PHPUnit)
RUN composer install

# Da permisos adecuados
RUN chown -R www-data:www-data /var/www/html

