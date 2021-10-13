<?php
require_once 'Bicycle.php';
$bike = new Bicycle();
$bike-> color="vert";
$bike-> currentSpeed=4;
echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';

echo $bike->brake().'<br>';

require_once 'Car.php';
$car = new Car('red', 2, 'essence');


echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->brake();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->brake();



