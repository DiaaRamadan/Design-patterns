<?php


namespace Src\Creational\Builder\Computer\Motherboard\MainParts;


class Disk
{
    /**
     * @var string
     */
    private string $type;

    /**
     * Disk constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

}