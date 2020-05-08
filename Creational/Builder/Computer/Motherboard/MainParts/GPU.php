<?php


namespace Src\Creational\Builder\Computer\Motherboard\MainParts;


class GPU
{
    /**
     * @var int
     */
    private int $size;

    /**
     * GPU constructor.
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