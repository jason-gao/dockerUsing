
php_host:
	docker exec -it php cat /etc/hosts
php:
	docker exec -it php bash
php_restart:
	docker-compose restart php

nginx_host:
	docker exec -it nginx cat /etc/hosts
nginx:
	docker exec -it nginx bash

mysql_host:
	docker exec -it mysql cat /etc/hosts
mysql:
	docker exec -it mysql bash

.PHONY: php_host php nginx_host nginx mysql_host mysql