# Usar una imagen base de PHP con Apache
FROM php:8.2-apache

# Habilitar el módulo mod_rewrite para Apache (importante para redirecciones)
RUN a2enmod rewrite

# Instalar las extensiones PHP necesarias para PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql pgsql

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Cambiar el DocumentRoot para que apunte a la raíz del proyecto
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html|' /etc/apache2/sites-available/000-default.conf

# Cambiar los permisos de los archivos para que Apache pueda acceder a ellos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Exponer el puerto 8080 para el tráfico web
EXPOSE 8080

# Iniciar Apache en primer plano (para que se ejecute en el contenedor)
CMD ["apache2-foreground"]
