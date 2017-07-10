#!/usr/bin/env bash

add-apt-repository ppa:ondrej/php
apt-get update
apt-get install -y wget
apt-get install -y git
apt-get install -y php7.1 php7.1-json php7.1-xml php7.1-mbstring php7.1-zip

wget https://getcomposer.org/download/1.4.2/composer.phar
mv composer.phar /usr/local/bin/composer
chmod -R 777 /usr/local/bin/composer
