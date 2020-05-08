<?php

namespace Src\Creational\Builder\Computer\Motherboard\Sockets;

class USB
{
    /**
     * @var string
     */
    private string $version;

    /**
     * USB constructor.
     * @param string $version
     */
    public function __construct(string $version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

}