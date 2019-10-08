FROM ubuntu:18.04
RUN apt-get update \
	&& apt-get install -y curl \
	&& rm -rf /var/lib/apt/lists/*

ENTRYPOINT	["curl", "-s", "https://ip.cn"]


# build
# docker build -t ubuntu:myip .
# run
# docker run ubuntu:myip -i

