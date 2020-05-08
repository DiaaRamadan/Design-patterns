<?php

namespace Src\Creational\Builder\Computer\Motherboard;

use Src\Creational\Builder\Computer\Motherboard\MainParts\CPU;
use Src\Creational\Builder\Computer\Motherboard\MainParts\Disk;
use Src\Creational\Builder\Computer\Motherboard\MainParts\GPU;
use Src\Creational\Builder\Computer\Motherboard\MainParts\NetworkCard;
use Src\Creational\Builder\Computer\Motherboard\MainParts\RAM;
use Src\Creational\Builder\Computer\Motherboard\Sockets\Sockets;

class Motherboard
{
    private CPU $CPU;
    private Disk $disk;
    private GPU $GPU;
    private NetworkCard $netWorkCard;
    private RAM $RAM;
    private Sockets $sockets;

    /**
     * Motherboard constructor.
     * @param CPU $CPU
     * @param Disk $disk
     * @param GPU $GPU
     * @param NetworkCard $netWorkCard
     * @param RAM $RAM
     * @param Sockets $sockets
     */
    public function __construct(CPU $CPU, Disk $disk, GPU $GPU, NetworkCard $netWorkCard, RAM $RAM, Sockets $sockets)
    {
        $this->CPU = $CPU;
        $this->disk = $disk;
        $this->GPU = $GPU;
        $this->netWorkCard = $netWorkCard;
        $this->RAM = $RAM;
        $this->sockets = $sockets;
    }

    /**
     * @return CPU
     */
    public function getCPU(): CPU
    {
        return $this->CPU;
    }

    /**
     * @return Disk
     */
    public function getDisk(): Disk
    {
        return $this->disk;
    }

    /**
     * @return GPU
     */
    public function getGPU(): GPU
    {
        return $this->GPU;
    }

    /**
     * @return NetworkCard
     */
    public function getNetWorkCard(): NetworkCard
    {
        return $this->netWorkCard;
    }

    /**
     * @return RAM
     */
    public function getRAM(): RAM
    {
        return $this->RAM;
    }

    /**
     * @return Sockets
     */
    public function getSockets(): Sockets
    {
        return $this->sockets;
    }



}