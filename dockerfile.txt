# Usar la imagen base de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones necesarias de PHP
RUN docker-php-ext-install mysqli

# Copiar todo el contenido de tu proyecto al directorio de Apache
COPY . /var/www/html/

# Exponer el puerto 8080
EXPOSE 8080

# Cambiar la configuración de Apache para que escuche en el puerto 8080
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf && \
    sed -i 's/:80/:8080/g' /etc/apache2/sites-available/000-default.conf

# Iniciar Apache en primer plano
CMD ["apache2-foreground"]
