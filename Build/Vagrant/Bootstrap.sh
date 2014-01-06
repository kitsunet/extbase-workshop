#!/usr/bin/env bash

apt-get update
apt-get install -y apache2 php5-fpm
rm -rf /var/www
ln -fs /vagrant /var/www