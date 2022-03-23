FROM php:7.4-apache

# イメージ作成時に実行
RUN echo "now building... (myweb)"
RUN apt update && apt-get update
RUN apt-get install -y vim
RUN apt-get install -y iputils-ping
RUN docker-php-ext-install pdo_mysql