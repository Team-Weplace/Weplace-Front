first-build:
	docker-compose -f docker-compose-dev.yml up -d --build
	npm install
	npm run build
	docker exec projeto-weplace composer install
	docker exec projeto-weplace chown -R www-data:www-data /var/www/html
	docker exec projeto-weplace chown -R $USER:www-data ./storage/*
	docker exec projeto-weplace chmod -R 775 ./bootstrap/cache/
	docker exec projeto-weplace
build:
	docker-compose -f docker-compose-dev.yml up -d --build
	npm run build
stop:
	docker-compose stop
up:
	docker-compose -f docker-compose-dev.yml up -d
down:
	docker-compose -f docker-compose-dev.yml down -v
laravel-install:
	docker exec projeto-weplace composer install
laravel-migrate:
	docker exec projeto-weplace php artisan migrate
laravel-seed:
	docker exec projeto-weplace php artisan migrate:refresh --seed
laravel-config:
	docker exec projeto-weplace php artisan config:clear
	docker exec projeto-weplace php artisan config:cache
laravel-config-clear:
	docker exec projeto-weplace php artisan config:clear
laravel-config-cache:
	docker exec projeto-weplace php artisan config:cache
laravel-route:
	docker exec projeto-weplace php artisan route:clear
	docker exec projeto-weplace php artisan route:cache
laravel-route-clear:
	docker exec projeto-weplace php artisan route:clear
laravel-route-cache:
	docker exec projeto-weplace php artisan route:cache
laravel-application-seed:
	docker exec projeto-weplace php artisan db:seed --class=ApplicationSeeder
laravel-optimize:
	docker exec projeto-weplace php artisan optimize:clear
laravel-test:
	docker exec projeto-weplace php artisan test --filter ApplicationFluxTest
laravel-test-all:
	docker exec projeto-weplace php artisan test
laravel-run-test:
	docker exec projeto-weplace php artisan migrate:refresh --seed
	docker exec projeto-weplace php artisan test --filter ApplicationFluxTest
laravel-queue:
	docker exec projeto-weplace php artisan queue:work
prod-stop:
	docker compose stop
prod-up:
	docker compose up -d
prod-down:
	docker compose down -v
prod-build:
	docker compose up -d --build
	sudo npm install
	sudo npm run build
	docker exec projeto-weplace composer install
