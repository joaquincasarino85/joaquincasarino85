EXAMPLES OF PHP DESIGN PATTERNS

For running the php files: 

1) Download PHP cli from docker image

$ docker build -t my-php-app .

$ docker run -it --rm --name my-running-app my-php-app

2) Run each PHP script "example.php" from every folder. Examples:

$ docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php factory/example.php

$ docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php abstract-factory/example.php

$ docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php singleton/example.php

$ docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php composite/example.php



