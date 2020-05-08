<?php


namespace Src\Creational\Builder\Computer\Motherboard\MainParts;


class RAM
{
    /**
     * @var int
     */
    private int $size;

    /**
     * RAM constructor.
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

}