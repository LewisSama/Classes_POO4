<?php

final class MotorWay extends HighWay {

    private $maxSpeed = 130;
    private $nbLane = 4;
    public function addVehicule(object $elem)
    {
        if ($elem instanceof Car)
        {
            $this->currentVehicules[] = $elem;
        }
        else
            {
            echo 'This is not an allowed type of vehicules';
        }
    }
}