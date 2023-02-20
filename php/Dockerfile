FROM php:7.4-fpm

RUN apt update \
  && apt-get install libssl-dev -y \
  && pecl install mongodb \
  &&  echo "extension=mongodb.so" > $PHP_INI_DIR/conf.d/mongo.ini