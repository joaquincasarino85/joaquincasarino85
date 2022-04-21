<?php
abstract class AbstractVehicleFactory{
    public static function create($vehicle){
        return new $vehicle;    
    }
}
class TruckBrand extends AbstractVehicleFactory{
    public static function create($truck){
        return new $truck;
    }
}
class CarBrand extends AbstractVehicleFactory{
    public static function create($car){
        return new $car;
    }
}
class BMW extends CarBrand{
}
class Fiat extends CarBrand{
}
class Peugeot extends CarBrand{
}
class Scania extends TruckBrand{
}
class Volvo extends TruckBrand{
}

$car1 = AbstractVehicleFactory::create('BMW');
$car2 = AbstractVehicleFactory::create('Fiat');
$car3 = AbstractVehicleFactory::create('Peugeot');
$truck1 = AbstractVehicleFactory::create('Volvo');
$truck2 = AbstractVehicleFactory::create('Scania');

var_dump(get_class($car1));
var_dump(get_class($car2));
var_dump(get_class($car3));
var_dump(get_class($truck1));
var_dump(get_class($truck2));