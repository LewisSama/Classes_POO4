<?php
require_once 'Vehicle.php';
require_once 'Bike.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';


$lada = new Car('blue', 4, 'fuel');
var_dump($lada);
$rockrider = new Bike('blue', 1);
var_dump($rockrider);
$grosCamion = new Truck('blue', 2, 'fuel', '30');
var_dump($grosCamion);
$globe = new Skateboard('red', 0);
var_dump($globe);



$a10 = new MotorWay;
echo 'Ajout de voiture à MotoWay' . '<br/>'. '<br/>';
$a10->addVehicule($lada);
echo  '<br/>'.'Ajout de velo à MotoWay' . '<br/>';
$a10->addVehicule($rockrider);

$rueNormale = new ResidentialWay();
echo '<br/>'.'Ajout de Skateboard à ResidentialWay' . '<br/>'. '<br/>';
$rueNormale->addVehicule($globe);
echo '<br/>'.'Ajout de voiture à ResidentialWay' . '<br/>'. '<br/>';
$rueNormale->addVehicule($lada);

$ruePietonne = new PedestrianWay();
echo '<br/>'.'Ajout de voiture à PedestrianWay' . '<br/>';
$ruePietonne->addVehicule($lada);
echo '<br/>'.'Ajout de Skateboard à PedestrianWay' . '<br/>'. '<br/>';

