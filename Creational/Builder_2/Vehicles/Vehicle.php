<?php


namespace Src\Creational\Builder_2\Vehicles;


use Src\Creational\Builder_2\Parts\Doors;
use Src\Creational\Builder_2\Parts\Engine;
use Src\Creational\Builder_2\Parts\Wheel;

class Vehicle
{
    private Wheel $wheel;
    private Engine $engine;
    private Doors $doors;

    /**
     * @return Wheel
     */
    public function getWheel(): Wheel
    {
        return $this->wheel;
    }

    /**
     * @param Wheel $wheel
     */
    public function setWheel(Wheel $wheel): void
    {
        $this->wheel = $wheel;
    }

    /**
     * @return Engine
     */
    public function getEngine(): Engine
    {
        return $this->engine;
    }

    /**
     * @param Engine $engine
     */
    public function setEngine(Engine $engine): void
    {
        $this->engine = $engine;
    }

    /**
     * @return Doors
     */
    public function getDoors(): Doors
    {
        return $this->doors;
    }

    /**
     * @param Doors $doors
     */
    public function setDoors(Doors $doors): void
    {
        $this->doors = $doors;
    }


}