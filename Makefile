setup:
	composer install
	cp -n .env.example .env
	php artisan key:gen --ansi
	touch database/database.sqlite || true
	php artisan migrate
	php artisan db:seed --force

serve:
	php artisan serve

migrate:
	php artisan migrate

console:
	php artisan tinker

test:
	php artisan config:clear
	php artisan test

coverage:
	php artisan tests --coverage-clover ./build/logs/clover.xml

docker:
	docker build -t catinbeard/powerplant:latest .

lint:
	composer exec --verbose phpcs -- --standard=PSR12 app/Http/Controllers tests

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 app/Http/Controllers tests

logs:
	tail -f storage/logs/laravel.log
