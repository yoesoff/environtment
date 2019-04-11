FROM php:7.2-fpm

#https://hub.docker.com/_/php/
#https://github.com/ezsystems/docker-php/blob/master/php/Dockerfile-7.2
#https://stackoverflow.com/questions/55623901/magento-2-warning-imagecreatefromjpeg-error

# PHP.INI Settings
RUN echo 'memory_limit = 2G' >> /usr/local/etc/php/conf.d/memlimit.ini;
RUN echo 'max_execution_time = 18000' >> /usr/local/etc/php/conf.d/max_execution_time.ini;

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y apt-utils snmp wget iputils-ping libicu-dev vim
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libxpm-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/ --with-xpm-dir=/usr/include/ --enable-gd-jis-conv
RUN docker-php-ext-install -j$(nproc) gd      
RUN apt-get install -y libxml2-dev libldb-dev libxml2-dev libssl-dev \
    libxslt-dev \
    libpq-dev \
    libsqlite3-dev \
    libsqlite3-0 \
    libc-client-dev \
    libkrb5-dev \
    curl \
    libcurl3 \
    libcurl3-dev \
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
RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini
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
RUN docker-php-ext-install -j$(nproc) json\
    hash \
    sockets \
    pdo \
    mbstring \
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
    interbase \
    pdo_firebird \
    opcache \
    pcntl \
    phar \
    posix \
    pspell \
    recode \
    shmop \
    simplexml \
    snmp \
    sysvmsg \
    sysvsem \
    sysvshm \
    tidy \
    wddx \
    xml \
    xmlrpc \
    xmlwriter
#
RUN pecl install redis && docker-php-ext-enable redis
#
RUN pecl install mongodb && docker-php-ext-enable mongodb
#
RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer
# Set timezone
RUN rm /etc/localtime
RUN ln -s  /usr/share/zoneinfo/Asia/Jakarta  /etc/localtime
RUN "date"
#
WORKDIR /var/www
