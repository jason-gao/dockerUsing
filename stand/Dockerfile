#########载入基础镜像######
FROM centos7:latest
MAINTAINER ljx<deploy@chehejia.com>
##########安装常用命令包##########
RUN yum -y install net-tools lsof openssh-server openssl openssl-devel   wget curl supervisor
##########系统管理key文件###########
RUN curl http://xxxx/scripts/add_ops.sh | sh
###########发布系统key 认证#########
RUN curl http://xxxx:9090/scripts/add_jenkins.sh | sh
RUN mkdir /chj/data/ -p && mkdir /chj/app && mkdir /chj/devops && mkdir /chj/pkg && mkdir /chj/log && mkdir /chj/pkg/jdk/
##########设置CST时区##############
ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
##########设置中文字符集###########
RUN  yum -y install kde-l10n-Chinese telnet  reinstall glibc-common &&   localedef -c -f UTF-8 -i zh_CN zh_CN.utf8
ENV LANG zh_CN.UTF-8
ENV LC_ALL zh_CN.UTF-8
##########################################
###########设置时间#########
RUN yum -y install cron*  ntp && echo '*/5 * * * * /usr/sbin/ntpdate ntp1.aliyun.com >/dev/null 2>&1' >/var/spool/cron/root

###########ssh 服务配置###########
RUN sed -ri 's/session required pam_loginuid.so/#session required pam_loginuid.so/g' /etc/pam.d/sshd
RUN ssh-keygen -t rsa -f /etc/ssh/ssh_host_rsa_key -N "" && ssh-keygen -t ecdsa -f /etc/ssh/ssh_host_ecdsa_key -N "" && ssh-keygen -t ed25519 -f /etc/ssh/ssh_host_ed25519_key -N ""
##########配置容器java 环境#######
COPY ./base/jdk /chj/pkg/jdk/
RUN chmod +x /chj/pkg/jdk/bin/* && ln -s /chj/pkg/jdk/bin/java  /usr/sbin/java
#########修改环境变量############
ADD ./base/bashrc /root/.bashrc
ADD ./base/supervisord.conf /etc/supervisord.conf
ADD ./base/ntp.ini /etc/supervisord.d/
ADD ./base/sshd.ini /etc/supervisord.d/sshd.ini
ADD ./base/setup.sh /opt
RUN chmod a+x /opt/setup.sh
ENTRYPOINT [ "bash", "/opt/setup.sh","exec ","$@" ]
########开放SSH服务端口##########
EXPOSE   22