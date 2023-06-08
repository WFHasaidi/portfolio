# Use the official PHP 8 image
FROM php:8-apache

# Install additional PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the document root
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy your PHP website files to the container
COPY . /var/www/html

# Change to your project directory
WORKDIR /var/www/html

# Copy the .htaccess file
COPY public/.htaccess /var/www/html/.htaccess

# Install project dependencies using Composer
RUN composer install

# Expose port 80
EXPOSE 80
