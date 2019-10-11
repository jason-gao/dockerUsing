FROM node:slim
RUN mkdir /app
WORKDIR /app
ONBUILD COPY ./package.json /app
ONBUILD RUN [ "npm", "install" ]
ONBUILD COPY . /app/
CMD [ "npm", "start" ]


#Usage:	docker build [OPTIONS] PATH | URL | -
#Build an image from a Dockerfile

# build
# docker build -t node:v1 .

# run
# Usage:	docker run [OPTIONS] IMAGE [COMMAND] [ARG...]
# Run a command in a new container

# docker run node:v1