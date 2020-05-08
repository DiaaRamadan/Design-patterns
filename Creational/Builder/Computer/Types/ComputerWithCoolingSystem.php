<?php


namespace Src\Creational\Builder\Computer\Types;


use Src\Creational\Builder\Computer\CoolingSystem;

class ComputerWithCoolingSystem extends Computer implements ICoolingSystem
{
    /**
     * @var CoolingSystem
     */
    private CoolingSystem $coolingSystem;

    /**
     * @return bool
     */
    public function turnOn(): bool
    {
        // Do some thing and then
        return true;
    }

    /**
     * @return bool
     */
    public function turnOff(): bool
    {
        // do some thing and then
        return true;
    }

    /**
     * @param int $temp
     * @return bool
     */
    public function coolDown(int $temp): bool
    {
        // do some thing and then
        return true;
    }

    /**
     * @return CoolingSystem
     */
    public function getCoolingSystem(): CoolingSystem
    {
        return $this->coolingSystem;
    }

    /**
     * @param CoolingSystem $coolingSystem
     */
    public function setCoolingSystem(CoolingSystem $coolingSystem): void
    {
        $this->coolingSystem = $coolingSystem;
    }


}