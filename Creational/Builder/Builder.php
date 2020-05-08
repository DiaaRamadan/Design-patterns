<?php


namespace Src\Creational\Builder;


use Src\Creational\Builder\Computer\CoolingSystem;
use Src\Creational\Builder\Computer\Keyboard;
use Src\Creational\Builder\Computer\Monitor;
use Src\Creational\Builder\Computer\Motherboard\Motherboard;
use Src\Creational\Builder\Computer\Mouse;
use Src\Creational\Builder\Computer\Types\Computer;
use Src\Creational\Builder\Computer\UPS;

abstract class Builder
{
    protected Computer $computer;

    abstract protected function buildMotherboard(): Motherboard;
    abstract protected function buildKeyboard(): Keyboard;
    abstract protected function buildMouse(): Mouse;
    abstract protected function buildMonitor(): Monitor;
    abstract protected function buildCoolingSystem(): CoolingSystem;
    abstract protected function buildUPS(): UPS;
    abstract public function getComputer(): Computer;

}