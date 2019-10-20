FROM nginx
RUN echo '<h1>Hello, Docker, jasong!</h1>' > /usr/share/nginx/html/index.html

# 构建镜像
# docker build -t tudoumogu/nginx:v1 .

# run
# docker run --name ng-web01 -d -p 82:80 tudoumogu/nginx:v1


# more

#docker run --name ng-web01 nginx
#
#docker exec -it ng-web01 bash
#
#docker cp ng-web01:/etc/nginx/nginx.conf `pwd`/data/ng/conf/
#
#docker run --privileged -it --rm -p 82:80 \
# 	--name ng-web01 \
# 	-v `pwd`/data/ng/conf/nginx.conf:/etc/nginx/nginx.conf:ro \
# 	-v `pwd`/data/ng/conf/conf.d:/etc/nginx/conf.d:ro \
# 	-v `pwd`/data/ng/html:/usr/share/nginx/html \
# 	-v `pwd`/data/ng/logs:/var/log/nginx \
# 	nginx
#
#docker cp ng-web01:/etc/nginx/conf.d/default.conf `pwd`/data/ng/conf/conf.d
#
#docker rm ng-web01
#
#docker exec -it ng-web01 nginx -s reload
