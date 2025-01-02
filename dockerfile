FROM php:8.2-apache

# 必要なパッケージのインストール
RUN apt-get update && apt-get install -y \
    nodejs \
    npm \
    git \
    unzip

# PHP拡張機能のインストール
RUN docker-php-ext-install pdo_mysql

# Apache の mod_rewrite を有効化
RUN a2enmod rewrite

# 作業ディレクトリの設定
WORKDIR /var/www/html

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Apache設定
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf 