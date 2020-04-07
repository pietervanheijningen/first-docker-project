FROM trafex/alpine-nginx-php7:1.5.0

RUN rm /var/www/html/*
COPY public /var/www/html
