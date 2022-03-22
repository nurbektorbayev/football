FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
        libmcrypt-dev \
        libpng-dev \
        libicu-dev \
        libpq-dev \
        libxpm-dev \
        libvpx-dev \
        git \
        supervisor \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libxslt-dev \
        unzip \
        dos2unix \
        libmagickwand-dev \
        librabbitmq-dev \
        ca-certificates \
        libgnutls30 \
    && docker-php-ext-install -j$(nproc) intl \
    && docker-php-ext-install -j$(nproc) zip \
    && docker-php-ext-install -j$(nproc) pgsql \
    && docker-php-ext-install -j$(nproc) pdo_pgsql \
    && docker-php-ext-install -j$(nproc) xsl \
    && docker-php-ext-install -j$(nproc) gd  \
    && pecl install redis \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
        redis \
    && pecl install amqp \
    && docker-php-ext-enable amqp \
    && docker-php-ext-install bcmath 
    # && pecl install xdebug \
    # && docker-php-ext-enable xdebugs

# Installing Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installig nodejs and yarn
RUN echo '-k' > ~/.curlrc
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs
RUN npm -g install yarn

WORKDIR /var/www/app