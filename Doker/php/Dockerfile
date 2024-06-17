# Utiliza la imagen base de PHP con Apache
FROM php:7.4-apache

# Instala extensiones necesarias
RUN docker-php-ext-install mysqli

# Habilitar mod_rewrite para Apache
RUN a2enmod rewrite

# Comentar o eliminar esta línea si no tienes un archivo apache-config.conf
# COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Exponer el puerto 80
EXPOSE 80
