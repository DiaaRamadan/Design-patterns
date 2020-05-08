<?php


namespace Src\Creational\Builder\Computer;


class Keyboard
{
    /**
     * @var bool
     */
    private bool $utfSupport;

    /**
     * Keyboard constructor.
     * @param bool $utfSupport
     */
    public function __construct(bool $utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }

    /**
     * @return bool
     */
    public function isUtfSupport(): bool
    {
        return $this->utfSupport;
    }


}