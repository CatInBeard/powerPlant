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
	php artisan test --coverage-clover ./build/logs/clover.xml

docker:
	docker build -t catinbeard/powerplant:latest .

lint:
	composer phpcs -- --standard=PSR12 app routes tests

lint-fix:
	composer phpcbf app/Http/Controllers tests

logs:
	tail -f storage/logs/laravel.log
