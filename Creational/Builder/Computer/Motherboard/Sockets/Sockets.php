<?php


namespace Src\Creational\Builder\Computer\Motherboard\Sockets;


class Sockets
{
    /**
     * @var array
     */
    private array $sockets;

    /**
     * Sockets constructor.
     * @param array $sockets
     */
    public function __construct(array $sockets)
    {
        $this->sockets = $sockets;
    }

    /**
     * @return array
     */
    public function getSockets(): array
    {
        return $this->sockets;
    }

}