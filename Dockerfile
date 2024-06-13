# Usa una imagen base de PHP con Apache
FROM php:8.1-apache

# Instala las herramientas necesarias
RUN apt-get update && apt-get install -y \
    git \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    unzip

# Instala extensión de mysqli
RUN docker-php-ext-install mysqli

# Instala extensiones de PHP necesarias
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo pdo_mysql

# Clona el repositorio de Git con el branch main
# RUN git clone -b main https://github.com/dennismarkea/MNAMaquila.git /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Ajusta los permisos
RUN chown -R www-data:www-data /var/www/html

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Expone el puerto 80
EXPOSE 80

# Configura el punto de entrada por defecto
CMD ["apache2-foreground"]
