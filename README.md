EXAMPLES OF PHP DESIGN PATTERNS

For running the php files: 

1) Download PHP cli from docker image

$ docker build -t my-php-app .

$ docker run -it --rm --name my-running-app my-php-app

2) Run each PHP script "example.php" from every folder. Examples:

$ docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php src/factory/example.php

$ docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php src/abstract-factory/example.php

$ docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php src/singleton/example.php

$ docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php src/composite/example.php

For running the php unit test:

Use the docker-compose.yml file. 

1) Download the vendor folder:

$ docker-compose run composer require --dev \
  phpunit/phpunit

2) Check the php unit version:

$ docker-compose run phpunit --version  

3) Generate the php.xml configuration following the steps through following command

$ docker-compose run phpunit --generate-configuration

4) Run the tests:

$ docker-compose run phpunit




