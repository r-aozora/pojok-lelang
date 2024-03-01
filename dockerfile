FROM php:8.2.0-apache


WORKDIR /var/www/html/


# Install Linux Libraries
RUN apt-get update -y && apt-get install -y \
   libicu-dev \
   unzip zip \
   zlib1g-dev \
   libpng-dev \
   libjpeg-dev \
   libfreetype6-dev \
   libjpeg62-turbo-dev \
   libpng-dev


# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install PHP Extensions
RUN docker-php-ext-install gettext intl pdo_mysql gd

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
   && docker-php-ext-install -j$(nproc) gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Copy the project files into the container
# COPY . .
COPY . /var/www/html/

# Install project dependencies

# RUN composer update

# RUN composer install
# RUN composer dump-autoload

RUN composer install --optimize-autoloader
RUN composer update --no-scripts

#  Copy .env file
#RUN cp .env.example .env

# Run migration and seed, generate application key, and start the server

RUN php artisan key:generate
RUN php artisan config:clear
RUN php artisan cache:clear
RUN php artisan config:cache

# RUN php artisan route:clear

CMD php artisan migrate:refresh --seed && php artisan serve --host=0.0.0.0 --port=8000


