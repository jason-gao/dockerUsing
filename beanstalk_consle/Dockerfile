FROM ubuntu:16.04
LABEL maintainer="jasong <3048789891@qq.com>"


WORKDIR /root

RUN sed -i "s/archive.ubuntu.com/mirrors.aliyun.com/g" /etc/apt/sources.list && \
	sed -i "s/security.ubuntu.com/mirrors.aliyun.com/g" /etc/apt/sources.list

# install basic tools
RUN apt-get update && \
    apt-get install \
    git \
    curl \
    net-tools \
    wget \
    php7.0 \
    php7.0-mbstring \
    nginx -y

# apt-get install net-tools
# RUN apt-cache search php7

# install composer
RUN wget -O composer.phar https://mirrors.aliyun.com/composer/composer.phar && \
    mv composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer && \
    composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/

RUN composer create-project ptrofimov/beanstalk_console -s stable /app/src

RUN chown -R www-data:www-data /app

ADD ./btc.conf /etc/nginx/conf.d/btc.conf

ADD ./start.sh /start.sh

EXPOSE 80

ENTRYPOINT ["/bin/bash"]

CMD ["/start.sh"]

# entrypoint+cmd

# docker build -t bc .
# docker run --name bcv1 -p 82:80 bc:latest
# sudo cp /etc/hosts /etc/hosts.bak
# echo "127.0.0.1 btc.com" >> /etc/hosts
# curl btc.com:82

# https://www.zhaokeli.com/article/8496.html
# todo
# 清理缓存
# 用php7.2