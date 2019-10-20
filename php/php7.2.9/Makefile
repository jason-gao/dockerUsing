dl:
	 sh download.sh

build:
	 docker build -t tudoumogu/php:7.2.9 .


test:
	docker run -v web:/var/www/html -p 9001:9000 --rm -it tudoumogu/php:7.2.9

clean:
	 rm ./tmp