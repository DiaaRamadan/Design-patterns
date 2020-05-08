<?php

namespace Src\Creational\Builder\Computer\Motherboard\Sockets;

class CType
{
    /**
     * @var bool
     */
    private bool $withVideoTransfer;

    /**
     * CType constructor.
     * @param bool $withVideoTransfer
     */
    public function __construct(bool $withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }

    /**
     * @return bool
     */
    public function isWithVideoTransfer(): bool
    {
        return $this->withVideoTransfer;
    }

}