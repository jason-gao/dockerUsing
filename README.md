
- https://yeasy.gitbooks.io/docker_practice
- docker run -it --rm -p 4000:80 dockerpracticesig/docker_practice

# dockerfile
- https://docs.docker.com/engine/reference/builder/

# docker compose
- https://docs.docker.com/compose/compose-file/

### 删除无用docker镜像和容器
- 容器
 - docker rm `docker ps -a | grep Exited | awk '{print $1}'` 
 
- 镜像 
 - docker rmi -f  `docker images | grep '<none>' | awk '{print $3}'`  


# 删除网络
- docker network rm 5dca67408137

## 进入容器
-  docker exec -it nginx bash

## mac 宿主机ip
 - ping docker.for.mac.host.internal / docker.for.mac.localhost
 

## 显示容器ip
- docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' container_name_or_id
- docker inspect --format='{{.Name}} - {{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)

## docker desktop for mack network
- https://docs.docker.com/docker-for-mac/networking/#use-cases-and-workarounds

## docker网络模式
- https://www.cnblogs.com/yy-cxd/p/6553624.html
- https://www.cnblogs.com/kevingrace/p/6590319.html


# 宿主机访问docker容器
- 端口映射

# docker容器访问宿主机
- https://segmentfault.com/q/1010000009381075/
- https://github.com/hhxsv5/dev-tool/blob/master/LoopbackAlias(Mac%E4%B8%8B%E4%B8%BA%E6%9C%AC%E5%9C%B0%E5%9B%9E%E7%8E%AF%E5%9C%B0%E5%9D%80%E6%B7%BB%E5%8A%A0%E5%88%AB%E5%90%8D)/README.md
- https://blog.csdn.net/lfwliuliuliu/article/details/84528943
- https://www.cnblogs.com/delpan/p/7644973.htmlsdf
- docker.for.mac.localhost
- DOCKER_HOST
- --add-host dockerhost:1.1.1.1

- 宿主机docker0 ip Linux下一般是 172.17.0.1 , macOS下一般是 192.168.65.1 
- bridge ，即桥接网络，以桥接模式连接到宿主机；
- host 是宿主网络，即与宿主机共用网络； 
- none 则表示无网络，容器将无法联网，
当容器使用 host 网络时，容器与宿主共用网络，这样就能在容器中访问宿主机网络，
那么容器的 localhost 就是宿主机的 localhost
	- docker run -d --name nginx --network host nginx
- https://blog.nyan.im/posts/3981.html
- https://segmentfault.com/q/1010000014307532

	
# docker容器互相访问
- https://www.cnblogs.com/shenh/p/9714547.html
- https://blog.csdn.net/subfate/article/details/81396532
- network 或者links

# docker容器静态ip
- https://github.com/yeszao/dnmp/issues/91
- 用来指定host


# 容器安装php安装扩展 
- docker-php-ext-install redis
- https://blog.csdn.net/abc564643122/article/details/89875544

# 构建自己的php容器
- https://msd.misuland.com/pd/3617186409758065236


# 容器挂载
- 初次挂载 宿主机目录或者文件覆盖容器的，挂载后，宿主机和容器任意修改同步

# load
- https://www.cnblogs.com/yshyee/p/7258477.html


# error
- apk WARNING Ignoring APKINDEX No such file or directory #207
	- https://github.com/gliderlabs/docker-alpine/issues/207
- PHP on Alpine gives `Warning: Use of undefined constant GLOB_BRACE` #719
 - https://github.com/docker-library/php/issues/719	  
