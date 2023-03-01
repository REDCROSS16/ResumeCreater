ARG NODE_VERSION=14

FROM alexredcross16113141/nginx-php:1.0 as web-app

COPY .docker/bin/web-entrypoint /usr/local/bin/docker-entrypoint.sh

WORKDIR "/srv/www"

RUN [ ${XDEBUG} -gt 0 ] && phpenxdebug && echo "XDebug Enabled" || echo "XDebug NOT Enabled"

ENTRYPOINT ["docker-entrypoint.sh"]

FROM node:${NODE_VERSION}-alpine AS nodejs

WORKDIR /srv/www

#COPY .docker/bin/nodejs-entrypoint /usr/local/bin/docker-entrypoint

#ENTRYPOINT ["docker-entrypoint"]

CMD ["yarn", "watch"]

FROM alexredcross16113141/php-composer:1.2 as php-web

WORKDIR "/srv/www"