<?php declare(strict_types=1);

namespace Builder;

use Builder\Parts\Door;
use Builder\Parts\Engine;
use Builder\Parts\Vehicle;
use Builder\Parts\Wheel;

use Builder\Parts\Truck;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addDoors()
    {
        $this->truck->setPart('leftDoor', new Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('engine', new Engine());
    }

    public function addWheels()
    {
        $i = 1;
        while ($i < 19)
        {
            $this->truck->setPart('wheel'.$i, new Wheel()); // wheel1, wheel2.. wheel18
            $i++;
        }
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}