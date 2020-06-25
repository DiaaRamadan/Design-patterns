<?php


namespace Src\Creational\Builder_2\Vehicles;


use Src\Creational\Builder_2\Builder;
use Src\Creational\Builder_2\Parts\Doors;
use Src\Creational\Builder_2\Parts\Engine;
use Src\Creational\Builder_2\Parts\Wheel;

class CarBuilder implements Builder
{

    public function buildWheel(): Wheel
    {
        return new Wheel('m123', 'F2014', '12', 12.5);
    }

    public function buildEngine(): Engine
    {
        return new Engine('DRT253', '2019', 120547);
    }

    public function buildDoors(): Doors
    {
        return new Doors(4, 'Auto');
    }


    public function getVehicle(): Vehicle
    {
        $vehicle = new Vehicle();
        $vehicle->setWheel($this->buildWheel());
        $vehicle->setEngine($this->buildEngine());
        $vehicle->setDoors($this->buildDoors());
        return $vehicle;
    }
}