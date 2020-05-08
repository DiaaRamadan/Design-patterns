<?php

namespace Src\Creational\Builder\Computer\Types;

use Src\Creational\Builder\Computer\Keyboard;
use Src\Creational\Builder\Computer\Monitor;
use Src\Creational\Builder\Computer\Motherboard\Motherboard;
use Src\Creational\Builder\Computer\Mouse;

abstract class Computer
{

    protected Motherboard $motherboard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;

    abstract public function turnOn(): bool;
    abstract public function turnOff(): bool;

    /**
     * @return Motherboard
     */
    public function getMotherboard(): Motherboard
    {
        return $this->motherboard;
    }

    /**
     * @param Motherboard $motherboard
     */
    public function setMotherboard(Motherboard $motherboard): void
    {
        $this->motherboard = $motherboard;
    }

    /**
     * @return Keyboard
     */
    public function getKeyboard(): Keyboard
    {
        return $this->keyboard;
    }

    /**
     * @param Keyboard $keyboard
     */
    public function setKeyboard(Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @return Mouse
     */
    public function getMouse(): Mouse
    {
        return $this->mouse;
    }

    /**
     * @param Mouse $mouse
     */
    public function setMouse(Mouse $mouse): void
    {
        $this->mouse = $mouse;
    }

    /**
     * @return Monitor
     */
    public function getMonitor(): Monitor
    {
        return $this->monitor;
    }

    /**
     * @param Monitor $monitor
     */
    public function setMonitor(Monitor $monitor): void
    {
        $this->monitor = $monitor;
    }


    public function dashboard(): string {
        return "";
    }
}