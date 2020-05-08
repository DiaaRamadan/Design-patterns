<?php


namespace Src\Creational\Builder\Computer\Motherboard\MainParts;


class NetworkCard
{
    /**
     * @var int
     */
    private int $category;

    /**
     * NetworkCard constructor.
     * @param int $category
     */
    public function __construct(int $category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

}