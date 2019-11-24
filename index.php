<?php
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'RechargeableInterface.php';

$lada = new Car('red', 1, 'fuel');
$lada->setParkBrake('true');
try {
    $lada->start();
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "<br/>";
    var_dump($lada);
    $lada->setParkBrake('false');
} finally {
    var_dump($lada);
    echo "Ma voiture roule comme un donut\n";
}
