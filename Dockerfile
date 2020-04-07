FROM richarvey/nginx-php-fpm:1.5.0

RUN rm /var/www/html/*
COPY public /var/www/html
