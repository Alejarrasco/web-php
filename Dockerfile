FROM php:7.4-apache

# Habilitar módulos de Apache
RUN a2enmod rewrite

# Copiar archivos de la aplicación a la imagen
COPY . /var/www/html/

COPY db.sql /docker-entrypoint-initdb.d/

# Exponer el puerto 80 para Apache
EXPOSE 80
