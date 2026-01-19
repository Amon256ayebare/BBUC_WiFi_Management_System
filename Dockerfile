FROM php:8.2-apache

# Enable Apache rewrite (optional but recommended)
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html

# Expose Render port
EXPOSE 80


