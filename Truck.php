<?php
class Truck extends Vehicle
{
    /**
     * @var integer
     */
    protected $stock = 0;
    /**
     * @var integer
     */
    protected $stockCapacity;

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }
    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity(string $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
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
    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->stockCapacity = $stockCapacity;
    }
    public function isTruckFull(): string {
        if ($this->stock === $this->stockCapacity){
            return 'full';
        }
        else{
            return 'in filling';
        }
    }
}