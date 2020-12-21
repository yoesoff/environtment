FROM php:7.4-fpm

# PHP.INI Settings
RUN echo 'memory_limit = 3G' >> /usr/local/etc/php/conf.d/memlimit.ini;
RUN echo 'max_execution_time = 18000' >> /usr/local/etc/php/conf.d/max_execution_time.ini;

#https://github.com/phusion/baseimage-docker/issues/58
RUN echo 'debconf debconf/frontend select Noninteractive' | debconf-set-selections

#https://github.com/wv-gis/mudak-wrm-public/issues/2
ENV APT_KEY_DONT_WARN_ON_DANGEROUS_USAGE=DontWarn

#Update
#https://github.com/phusion/baseimage-docker/issues/319
RUN apt-get update --fix-missing
RUN apt-get install -y --no-install-recommends apt-utils \
    git-core \
    openssl \
    libssl-dev \
    libzip-dev

#Install Stuff
RUN apt-get install -y --no-install-recommends vim git

RUN apt-get install -y  --no-install-recommends build-essential \
    gnupg2 \
    snmp \
    wget \
    iputils-ping \ 
    libicu-dev 
  
RUN apt-get install -y --no-install-recommends libfreetype6-dev libjpeg62-turbo-dev libxpm-dev libpng-dev

RUN docker-php-ext-configure gd 
RUN docker-php-ext-install -j$(nproc) gd      
RUN apt-get install -y --no-install-recommends libxml2-dev libldb-dev libxml2-dev \
    libxslt-dev \
    libpq-dev \
    libsqlite3-dev \
    libsqlite3-0 \
    libc-client-dev \
    libkrb5-dev \
    curl \
    libcurl4 \
    libcurl4-gnutls-dev \
    firebird-dev \
    libpspell-dev \
    aspell-en aspell-de \
    libtidy-dev \
    libsnmp-dev \
    librecode0 \
    librecode-dev
# RUN apt-get install -y postgresql-client
# RUN apt-get install -y mysql-client 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
#RUN pecl install apc
RUN docker-php-ext-install opcache
#RUN yes | pecl install xdebug \
#    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
#    && echo "xdebug.remote_enable=off" >> /usr/local/etc/php/conf.d/xdebug.ini \
#    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN docker-php-ext-install -j$(nproc) soap\
    ftp \
    xsl \
    bcmath \
    calendar \
    ctype \
    dba \
    dom \
    zip \
    session
    
RUN docker-php-ext-configure json
RUN docker-php-ext-install -j$(nproc) json\
    tokenizer \
    pgsql \
    pdo_pgsql \
    pdo_mysql \
    pdo_sqlite \
    intl \
    mysqli
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-install -j$(nproc) imap\
    curl \
    exif \
    fileinfo \
    gettext \
    iconv \
    opcache \
    pcntl \
    phar \
    posix \
    pspell \
    shmop \
    simplexml \
    snmp \
    sysvmsg \
    sysvsem \
    sysvshm \
    tidy \
    xml \
    xmlrpc \
    xmlwriter
#
RUN pecl install redis && docker-php-ext-enable redis
#
RUN pecl install mongodb && docker-php-ext-enable mongodb
#
RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer
#
RUN pecl install mailparse && docker-php-ext-enable mailparse
# mcrypt-1.0.1 for next version
#RUN apt-get install -y libmcrypt-dev && pecl install mcrypt-1.0.0 && docker-php-ext-enable mcrypt

#Install Node
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs
RUN ln -s /usr/bin/nodejs /usr/local/bin/node
RUN node -v

#Install NodeJS Tools
RUN npm install -g foreman
RUN npm install -g yarn
#RUN npm install -g webpack
#RUN npm install -g webpack-cli

# Set timezone
RUN rm /etc/localtime
RUN ln -s  /usr/share/zoneinfo/Asia/Jakarta  /etc/localtime
RUN "date"
#
WORKDIR /var/www
