<?php

class Bike extends Vehicle implements LightableInterface
{
    public function switchOff()
    {
        return false;
    }
    public function switchOn()
    {
        if($this->currentSpeed > 10){
            return true;
        }
        else{
            return false;
        }
    }
}