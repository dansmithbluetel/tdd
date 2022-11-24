FROM composer as builder
WORKDIR /app/
COPY composer.* ./
RUN composer install

FROM php:8.1.12-cli-bullseye
RUN pecl install xdebug \
	&& docker-php-ext-enable xdebug
#COPY . /app
COPY --from=builder /app/vendor /app/vendor
WORKDIR /app
