FROM nginx
RUN apt-get update && apt-get install -y curl && rm -rf /var/lib/apt/lists/*
HEALTHCHECK --interval=5s --timeout=3s \
CMD curl -fs http://localhost/ || exit 1


# build
# docker build -t myweb:v1 .

# run
# docker run --name mywebHealthCheck myweb:v1

# status
# docker container ls

# inspect
# docker inspect --format '{{json .State.Health}}' web | python -m json.tool
