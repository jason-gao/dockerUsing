
up:
	docker-compose up -d
down:
	docker-compose down --remove-orphans
ps:
	docker ps -a
php:
	docker exec -it php-5.6-fpm-alpine sh

phpserver:
	php -S 0.0.0.0:888 -t ./
	curl localhost:888/shell01.php


.PHONY: up down ps php