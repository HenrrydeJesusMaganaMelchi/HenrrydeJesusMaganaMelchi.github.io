# Usar una imagen base de PHP con Apache
FROM php:8.2-apache

# Habilitar el módulo mod_rewrite para Apache (importante para redirecciones)
RUN a2enmod rewrite

# Instalar las extensiones PHP necesarias (en caso de que uses base de datos o funciones PHP avanzadas)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar los archivos del proyecto al contenedor (esto incluye tus archivos HTML, PHP, CSS, JS, imágenes, etc.)
COPY . /var/www/html/

# Cambiar el DocumentRoot para que apunte a la raíz del proyecto
# Esto es importante para asegurar que Apache cargue el contenido correctamente
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html|' /etc/apache2/sites-available/000-default.conf

# Cambiar los permisos de los archivos para que Apache pueda acceder a ellos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Exponer el puerto 8080 para el tráfico web
EXPOSE 8080

# Iniciar Apache en primer plano (para que se ejecute en el contenedor)
CMD ["apache2-foreground"]
