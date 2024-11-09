# Usar una imagen base que tiene Apache y PHP
FROM php:8.2-apache

# Instalar las extensiones necesarias de PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar el módulo de rewrite de Apache
RUN a2enmod rewrite

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Asegurarse de que Apache tiene los permisos correctos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Cambiar el DocumentRoot para que apunte a la carpeta 'php'
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/php|' /etc/apache2/sites-available/000-default.conf

# Permitir acceso a todos los archivos en el DocumentRoot
RUN sed -i 's|<Directory /var/www/html>|<Directory /var/www/html/php>|' /etc/apache2/sites-available/000-default.conf && \
    echo "<Directory /var/www/html/php>\n    AllowOverride All\n    Require all granted\n</Directory>" >> /etc/apache2/sites-available/000-default.conf

# Asegurarse de que Apache escuche en el puerto 8080
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf && \
    sed -i 's/:80/:8080/g' /etc/apache2/sites-available/000-default.conf

# Exponer el puerto 8080
EXPOSE 8080

# Reiniciar Apache para aplicar la configuración
RUN service apache2 restart

# Comando para ejecutar Apache en primer plano
CMD ["apache2-foreground"]
