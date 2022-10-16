<?php

require_once ('car.php');

$obj = new Car('gray', 4, 'manual'); 
$obj->setBrand('Mercedes');
$obj->getBrand();

$car = new Car('green', 4, 'electric');
echo $car->forward();

var_dump($obj);
echo $obj->getbrand() . PHP_EOL;


require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();




/* Pour finir, une constante de classe peut directement être appelée à 
l'extérieur d'une classe sans que celle-ci soit instanciée. 
Pour cela, tu vas utiliser l'opérateur :

Par exemple, dans index.php, tu peux appeler la constante ALLOWED_ENERGIES 
de la classe Car directement, sans instancier une voiture : */
//var_dump(Car::ALLOWED_ENERGIES);//

require_once ('truck.php');

$smallTruck = new Truck(900, 100, 'black', 4, 'fuel');
$smallTruck->setCurrentSpeed(40);
$smallTruck->getCurrentSpeed();

echo $smallTruck->storage();
echo $smallTruck->forward();
echo $smallTruck->brake();

