FROM php:8.5-fpm-alpine
WORKDIR /var/www/html
RUN apk add --no-cache nginx supervisor curl oniguruma-dev \
    && docker-php-ext-install mbstring
COPY . .
RUN mkdir -p /run/nginx \
    && chmod -R 755 /var/www/html
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/php.ini /usr/local/etc/php/conf.d/custom.ini
EXPOSE 80
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
