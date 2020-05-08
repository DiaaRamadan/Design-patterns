<?php


namespace Src\Creational\Builder\Builders;


use Src\Creational\Builder\Builder;
use Src\Creational\Builder\Computer\CoolingSystem;
use Src\Creational\Builder\Computer\Keyboard;
use Src\Creational\Builder\Computer\Monitor;
use Src\Creational\Builder\Computer\Motherboard\MainParts\CPU;
use Src\Creational\Builder\Computer\Motherboard\MainParts\Disk;
use Src\Creational\Builder\Computer\Motherboard\MainParts\GPU;
use Src\Creational\Builder\Computer\Motherboard\MainParts\NetworkCard;
use Src\Creational\Builder\Computer\Motherboard\MainParts\RAM;
use Src\Creational\Builder\Computer\Motherboard\Motherboard;
use Src\Creational\Builder\Computer\Motherboard\Sockets\CType;
use Src\Creational\Builder\Computer\Motherboard\Sockets\Sockets;
use Src\Creational\Builder\Computer\Motherboard\Sockets\USB;
use Src\Creational\Builder\Computer\Mouse;
use Src\Creational\Builder\Computer\Types\Computer;
use Src\Creational\Builder\Computer\Types\ComputerWithCoolingSystem;
use Src\Creational\Builder\Computer\UPS;

class ComputerWithCoolingSystemBuilder extends Builder
{

    protected function buildMotherboard(): Motherboard
    {
        //    public function __construct(CPU $CPU, Disk $disk, GPU $GPU,
        // NetworkCard $netWorkCard, RAM $RAM, Sockets $sockets)

        $cpu = new CPU(2.2);
        $disk = new Disk('SSD');
        $gpu = new GPU(2);
        $networkCard = new NetworkCard(5);
        $ram = new RAM(16);
        $sockets = new Sockets(array(
            new CType(true),
            new USB(2),
            new USB(3),
            new CType(true),
            new CType(true)
        ));

        return new Motherboard($cpu, $disk, $gpu, $networkCard, $ram, $sockets);
    }

    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard(true);
    }

    protected function buildMouse(): Mouse
    {
        return new Mouse(false);
    }

    protected function buildMonitor(): Monitor
    {
        return new Monitor('1920 FHD');
    }

    protected function buildCoolingSystem(): CoolingSystem
    {
        return new CoolingSystem(8);
    }

    protected function buildUPS(): UPS
    {
        return new UPS(120);
    }

    public function getComputer(): Computer
    {
        $computer = new ComputerWithCoolingSystem();
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setCoolingSystem($this->buildCoolingSystem());
        $computer->setMonitor($this->buildMonitor());
        $computer->setMouse($this->buildMouse());
        $computer->setMotherboard($this->buildMotherboard());
        return $computer;
    }
}