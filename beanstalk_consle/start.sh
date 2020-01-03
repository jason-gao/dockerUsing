#!/bin/bash

#cat /etc/init.d/php7.0-fpm
service php7.0-fpm start
nginx -g "daemon off;"