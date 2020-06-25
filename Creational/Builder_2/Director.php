<?php


namespace Src\Creational\Builder_2;


use Src\Creational\Builder_2\Vehicles\Vehicle;

class Director
{
    /**
     * @var Builder
     */
    private Builder $builder;

    /**
     * Director constructor.
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function getVehicle(): Vehicle{
        return $this->builder->getVehicle();
    }

}