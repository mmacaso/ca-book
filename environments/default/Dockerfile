FROM php:5.6.13-cli

MAINTAINER Sandae Macalalag <sandaemc@gmail.com>

RUN apt-get update -y && \
    apt-get install -y \
        curl \
        git \
        zlib1g-dev \
    --no-install-recommends && rm -r /var/lib/apt/lists/*

RUN docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

RUN groupadd -r cadev -g 433 && \
    useradd -u 431 -r -g cadev -m -s /sbin/nologin -c "docker user" cadev && \
    chown -R cadev:cadev /home/cadev

USER cadev

RUN composer global require 'phpunit/phpunit=5.2.*'

ENTRYPOINT ["/home/cadev/.composer/vendor/bin/phpunit", "--verbose", "--tap"]
