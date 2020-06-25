<?php


namespace Src\Creational\Builder_2\Parts;


class Wheel
{
    private string $type;
    private string $model;
    private string $Hardness;
    private float $gravity;

    /**
     * wheel constructor.
     * @param string $type
     * @param string $model
     * @param string $Hardness
     * @param float $gravity
     */
    public function __construct(string $type, string $model, string $Hardness, float $gravity)
    {
        $this->type = $type;
        $this->model = $model;
        $this->Hardness = $Hardness;
        $this->gravity = $gravity;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getHardness(): string
    {
        return $this->Hardness;
    }

    /**
     * @return float
     */
    public function getGravity(): float
    {
        return $this->gravity;
    }

}