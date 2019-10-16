# docker run -d -p 5000:5000 --restart=always --name registry  -v ~/codes/docker/data/registry:/var/lib/registry  registry

# docker ps -a --no-trunc

# docker exec -it 35f vi /etc/docker/registry/config.yml

# 使用 docker tag 将 ubuntu:latest 这个镜像标记为 127.0.0.1:5000/ubuntu:latest
# 格式为 docker tag IMAGE[:TAG] [REGISTRY_HOST[:REGISTRY_PORT]/]REPOSITORY[:TAG]

# docker tag ubuntu:latest 127.0.0.1:5000/ubuntu:latest

# docker push 127.0.0.1:5000/ubuntu:latest

# curl http://127.0.0.1:5000/v2/_catalog

# docker image rm 127.0.0.1:5000/ubuntu:latest


# -v

#docker run --rm -it \
#    -v ~/codes/docker/data/history/.bash_history:/root/.bash_history \
#   ubuntu:18.04 \
#   bash