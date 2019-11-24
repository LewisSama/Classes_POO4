<?php
require_once 'Vehicle.php';
require_once 'RechargeableInterface.php';
class Car extends Vehicle implements LightableInterface
{
    /**
     * @var string
     */
    protected $energy;

    /**
     * @var int
     */
    protected $energyLevel;

    protected $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    public function start()
    {
        if ($hasParkBrake = 'true') {
            throw new Exception('Le frein à main est enclenché');
        } else {
            return 'la voiture est demarrée !';
        }
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn()
    {
        return true;
    }
    public function switchOff()
    {
        return false;
    }
    public function setParkBrake($hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
}
