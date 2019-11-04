<?php
final class ResidentialWay extends HighWay
{
    private $maxSpeed = 50;
    private $nbLane = 2;

    public function addVehicule(object $elem)
    {
        if ($elem instanceof Vehicle)
        {
            $this->currentVehicules[] = $elem;
        }
        else
        {
            echo 'This is not an allowed type of vehicules';
        }
    }
}