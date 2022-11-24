build:
	@docker build -t php-testing .

test:
	@docker run -it --rm --name php-test -v $(shell pwd):/app -w /app php-testing ./vendor/bin/phpunit tests --no-coverage

configure:
	@docker run -it --rm --name php-test -v $(shell pwd):/app -w /app php-testing php -dxdebug.mode=coverage ./vendor/bin/phpunit --generate-configuration

coverage:
	@docker run -it --rm --name php-test -v $(shell pwd):/app -w /app php-testing php -dxdebug.mode=coverage ./vendor/bin/phpunit tests --coverage-html html

clear:
	@docker run -it --rm --name php-test -v $(shell pwd):/app -w /app php-testing rm -rf html phpunit.xml
