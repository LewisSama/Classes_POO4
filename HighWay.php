<?php

abstract class HighWay
{
    protected $currentVehicules = [];

    private $nbLane = 0;
    private $maxSpeed = 0;

    public function getCurrentVehicules()
    {
        foreach($this->currentVehicules as $value){
            echo $value;
        }
    }

    public function setCurrentVehicules(array $array) : void
    {
        $this->currentVehicules[]= $array;
    }

    public function getNbLane() : int
    {
        return $this->nbLane;
    }
    public function setNbLane(int $number) : void
    {
        $this->nbLane = $number;
    }
    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed(int $number) : void
    {
        $this->maxSpeed = $number;
    }
    abstract public function addVehicule(object $elem);
}