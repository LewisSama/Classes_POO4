<?php
final class PedestrianWay extends HighWay {
    private $maxSpeed = 10;
    private $nbLane = 1;
    public function addVehicule(object $elem)
    {
        if ($elem instanceof Bike || $elem instanceof Skateboard)
        {
            $this->currentVehicules[] = $elem;
        }
        else
        {
            echo 'This is not an allowed type of vehicules';
        }
    }
}