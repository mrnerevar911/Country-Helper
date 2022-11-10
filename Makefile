run:
	docker run -it --rm -v $(PWD):/app -w /app php:7.4 php test.php

composer-install:
	docker run -it --rm -v $(PWD):/app -w /app composer composer install --ignore-platform-reqs

shell-cli:
	docker run -it --rm -v $(PWD):/app -w /app php:7.4 bash