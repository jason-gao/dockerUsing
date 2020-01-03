
# mkdir -p /data/docker
rsync:
	rsync -avt --delete --exclude data  ./ root@172.16.100.188:/data/docker/mongo
up:
	docker-compose up -d
down:
	docker-compose down --remove-orphans
ps:
	docker ps -a
rockmongo:
	docker exec -it mongo_rockmongo_1 bash

mongo:
	docker exec -it mongo_mongo_1 bash
mongoexpress:
	docker exec -it mongo_mongo-express_1 bash
.PHONY: rsync