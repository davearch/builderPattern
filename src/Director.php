<?php declare(strict_types=1);

namespace Builder;

use Builder\Parts\Vehicle;

class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addDoors();
        $builder->addWheels();
        
        return $builder->getVehicle();
    }
}