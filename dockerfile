# Usar una imagen base que tenga PHP y Apache
FROM php:8.2-apache

# Instalar las extensiones necesarias de PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar el módulo PHP en Apache
RUN a2enmod php8.2

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Asegurarse de que Apache escuche en el puerto 8080
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf && \
    sed -i 's/:80/:8080/g' /etc/apache2/sites-available/000-default.conf

# Exponer el puerto 8080 (esto es lo que Render usará)
EXPOSE 8080

# Comando para iniciar Apache en primer plano
CMD ["apache2-foreground"]
