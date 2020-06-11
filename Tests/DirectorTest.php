<?php declare(strict_types=1);

namespace Builder\Tests;

use Builder\Director;
use Builder\CarBuilder;
use Builder\TruckBuilder;

use Builder\Parts\Door;
use Builder\Parts\Engine;
use Builder\Parts\Vehicle;
use Builder\Parts\Wheel;

use Builder\Parts\Car;
use Builder\Parts\Truck;

use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildCar()
    {
        $builder = new CarBuilder();
        $newVehicle = (new Director())->build($builder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }

    public function testCanBuildTruck()
    {
        $builder = new TruckBuilder();
        $newVehicle = (new Director())->build($builder);
        
        $this->assertInstanceOf(Truck::class, $newVehicle);
    }
}