# 要依赖的镜像
FROM debian:stretch-slim

# RUN 构建时执行的指令
RUN groupadd -r redis && useradd -r -g redis redis

# 设置构建过程中的环境变量
ENV GOSU_VERSION 1.10
RUN set -ex; \
	# 省略....
RUN set -ex; \
	\
	buildDeps=' \
		# 省略....
# 运行REDIS后进入/bin/bash后的目录
WORKDIR /data

COPY docker-entrypoint.sh /usr/local/bin/
ENTRYPOINT ["docker-entrypoint.sh"]

EXPOSE 6379
CMD ["redis-server"]
