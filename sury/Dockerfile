FROM debian:buster-slim

RUN apt-get update \
  && apt-get --yes install apt-transport-https ca-certificates wget \
  && wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg \
  && sh -c 'echo "deb https://packages.sury.org/php/ buster main" > /etc/apt/sources.list.d/php.list' \
  && apt-get update \
  && apt-get --yes install \
    curl \
    php7.4-cli \
    php7.4-grpc \
    php7.4-protobuf \
  && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer \
  && mkdir -p /app/

WORKDIR /app
