<?php


namespace Src\Creational\Builder_2;


use Src\Creational\Builder_2\Parts\Doors;
use Src\Creational\Builder_2\Parts\Engine;
use Src\Creational\Builder_2\Parts\Wheel;
use Src\Creational\Builder_2\Vehicles\Vehicle;

interface Builder
{
    public function buildWheel(): Wheel;
    public function buildEngine(): Engine;
    public function buildDoors(): Doors;
    public function getVehicle(): Vehicle;
}