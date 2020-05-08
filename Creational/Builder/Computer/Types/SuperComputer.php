<?php


namespace Src\Creational\Builder\Computer\Types;


use Src\Creational\Builder\Computer\CoolingSystem;
use Src\Creational\Builder\Computer\UPS;

class SuperComputer extends Computer implements ICoolingSystem, IPower
{
    /**
     * @var CoolingSystem
     */
    private CoolingSystem $coolingSystem;

    /**
     * @var UPS
     */
    private UPS $UPS;

    /**
     * @return bool
     */
    public function turnOn(): bool
    {
        // TODO: Implement turnOn() method.
        return true;
    }

    /**
     * @return bool
     */
    public function turnOff(): bool
    {
        // TODO: Implement turnOff() method.
        return true;
    }

    /**
     * @param int $temp
     * @return bool
     */
    public function coolDown(int $temp): bool
    {
        // TODO: Implement coolDown() method.
        return true;
    }

    /**
     * @return bool
     */
    public function backupBower(): bool
    {
        // TODO: Implement backupBower() method.
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

    /**
     * @return UPS
     */
    public function getUPS(): UPS
    {
        return $this->UPS;
    }

    /**
     * @param UPS $UPS
     */
    public function setUPS(UPS $UPS): void
    {
        $this->UPS = $UPS;
    }

}