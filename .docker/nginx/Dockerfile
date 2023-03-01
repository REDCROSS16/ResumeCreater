FROM nginx:latest

COPY .docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf
# path to index.php
COPY ./public /var/www/public