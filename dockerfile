Run Dockerfile que garantice que Apache pueda servir correctamente tanto los archivos HTML como PHP.

dockerfile
Copiar código
# Usar una imagen base de PHP con Apache
FROM php:8.2-apache

# Habilitar el módulo mod_rewrite para Apache (importante para redirecciones)
RUN a2enmod rewrite

# Instalar las extensiones PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Cambiar el DocumentRoot para que apunte a la raíz del proyecto
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html|' /etc/apache2/sites-available/000-default.conf

# Cambiar los permisos de los archivos para que Apache pueda acceder a ellos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Exponer el puerto 8080
EXPOSE 8080

# Reiniciar Apache para aplicar la configuración
RUN service apache2 restart

# Comando para ejecutar Apache en primer plano
CMD ["apache2-foreground"]