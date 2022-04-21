<?php

abstract class Brand{

    public static function create($car){
        return new $car;
    }
}

class BMW extends Brand{
}

class Fiat extends Brand{
}

class Peugeot extends Brand{
}

$car1 = Brand::create('BMW');
$car2 = Brand::create('Fiat');
$car3 = Brand::create('Peugeot');

var_dump(get_class($car1));
var_dump(get_class($car2));
var_dump(get_class($car3));