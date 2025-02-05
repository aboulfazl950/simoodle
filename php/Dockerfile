FROM php:8.1-fpm

#RUN apt-get update && apt-get install -y \
#    libpng-dev \
#    libjpeg-dev \
#    libfreetype6-dev \
#    libxml2-dev \
#    zip \
#    unzip \
#    git \
#    && docker-php-ext-configure gd --with-freetype --with-jpeg \
#    && docker-php-ext-install gd mysqli pdo pdo_mysql xml zip intl soap opcache


# نصب ابزارهای مورد نیاز
RUN apt-get update --allow-releaseinfo-change && apt-get install -y \
    unzip git curl libpng-dev libjpeg-dev libfreetype6-dev libwebp-dev libxpm-dev \
    libonig-dev libzip-dev zip libxml2-dev libpq-dev mariadb-client \
    && rm -rf /var/lib/apt/lists/*

# اصلاح نصب GD: حذف پارامترهای اضافی
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# نصب سایر اکستنشن‌های مورد نیاز مودل
#RUN docker-php-ext-install mbstring zip xml pdo pdo_mysql mysqli intl soap xmlrpc opcache bcmath exif
RUN docker-php-ext-install mbstring zip xml pdo pdo_mysql mysqli intl soap opcache bcmath exif xmlwriter

COPY php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/html

# ایجاد دایرکتوری moodledata و تنظیم دسترسی‌ها
RUN mkdir /var/www/moodledata
RUN chown www-data -R /var/www/moodledata
RUN chmod 777 -R /var/www/moodledata

# اطمینان از ماندگاری داده‌های moodledata
VOLUME ["/var/www/moodledata"]