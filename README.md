- https://yeasy.gitbooks.io/docker_practice
- docker run -it --rm -p 4000:80 dockerpracticesig/docker_practice

### 删除无用docker镜像和容器
- 容器
 - docker rm `docker ps -a | grep Exited | awk '{print $1}'` 
- 镜像 
 - docker rmi -f  `docker images | grep '<none>' | awk '{print $3}'`  


# 删除网络
- docker network rm 5dca67408137

- https://www.jiloc.com/46364.html



