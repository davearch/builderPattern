<?php declare(strict_types=1);

namespace Builder;

use Builder\Parts\Car;

use Builder\Parts\Door;
use Builder\Parts\Wheel;
use Builder\Parts\Engine;
use Builder\Parts\Vehicle;

class CarBuilder implements BuilderInterface
{
    private $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('rightDoor', new Door());
    }

    public function addWheels()
    {
        $this->car->setPart('leftWheel', new Wheel());
        $this->car->setPart('rightWheel', new Wheel());
    }

    public function getVehicle(): vehicle
    {
        return $this->car;
    }
}