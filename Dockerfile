ARG NODE_VERSION=14

FROM alexredcross16113141/php-docker:1.0 as web-app

WORKDIR "/srv/www"

RUN [ ${XDEBUG} -gt 0 ] && phpenxdebug && echo "XDebug Enabled" || echo "XDebug NOT Enabled"

FROM node:${NODE_VERSION}-alpine AS nodejs

WORKDIR /srv/www

CMD ["yarn", "watch"]

