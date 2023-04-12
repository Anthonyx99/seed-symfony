SHELL := /bin/bash

start: #start docker
	docker compose up -d

stop: #stop docker
	docker compose down

shell-php: #start shell into php docker instance
	docker exec -it app-seed-name "/bin/bash"

install: #install composer dependancies
	docker exec -it app-seed-name ".build/ci/install.sh"
