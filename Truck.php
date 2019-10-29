<?php

require_once 'Vehicule.php';

class Truck extends Vehicule
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var integer
     */
    private $loadingCapacity = 100;

    /**
     * @var integer
     */
    private $loadingLevel = 0;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $loadingLevel)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->loadingLevel = $loadingLevel;
    }

    public function loadingLevel() : string
    {
        if($this->loadingLevel < $this->loadingCapacity) {
            return "in filling";
        } else {
            return "full";
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getLoadingLevel() : int
    {
        return $this->loadingLevel;
    }

    public function setLoadingLevel() : void
    {
        $this->loadingLevel = $loadingLevel;
    }

}