<?php


namespace Src\Creational\Builder_2\Parts;


class Doors
{
    private int $numberOfDoors;
    private string $doorControlType;

    /**
     * Doors constructor.
     * @param int $numberOfDoors
     * @param string $doorControlType
     */
    public function __construct(int $numberOfDoors, string $doorControlType)
    {
        $this->numberOfDoors = $numberOfDoors;
        $this->doorControlType = $doorControlType;
    }

    /**
     * @return int
     */
    public function getNumberOfDoors(): int
    {
        return $this->numberOfDoors;
    }

    /**
     * @return string
     */
    public function getDoorControlType(): string
    {
        return $this->doorControlType;
    }


}