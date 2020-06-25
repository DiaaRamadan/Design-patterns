<?php


namespace Src\Creational\Builder_2\Parts;


class Engine
{
    private string $type;
    private string $model;
    private int $number;

    /**
     * Engine constructor.
     * @param string $type
     * @param string $model
     * @param int $number
     */
    public function __construct(string $type, string $model, int $number)
    {
        $this->type = $type;
        $this->model = $model;
        $this->number = $number;
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
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

}