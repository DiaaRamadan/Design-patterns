<?php


namespace Src\Creational\Builder\Computer\Motherboard\MainParts;


class CPU
{
    /**
     * @var float
     */
    private float $speed;

    /**
     * CPU constructor.
     * @param float $speed
     */
    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }


}