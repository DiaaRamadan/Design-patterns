<?php


namespace Src\Creational\Builder\Computer;


class Mouse
{
    /**
     * @var bool
     */
    private bool $withExtraUnities;

    /**
     * Mouse constructor.
     * @param bool $withExtraUnities
     */
    public function __construct(bool $withExtraUnities)
    {
        $this->withExtraUnities = $withExtraUnities;
    }

    /**
     * @return bool
     */
    public function isWithExtraUnities(): bool
    {
        return $this->withExtraUnities;
    }

}