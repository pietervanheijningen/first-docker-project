FROM php:7.4-cli

COPY . /usr/src/phpapp

WORKDIR /usr/src/phpapp

CMD [ "php", "public/index.php" ]
