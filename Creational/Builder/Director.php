<?php


namespace Src\Creational\Builder;


use Src\Creational\Builder\Computer\Types\Computer;

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

    /**
     * @param Builder $builder
     */
    public function changeBuilder(Builder $builder){
        $this->builder = $builder;
    }

    /**
     * @return Computer
     */
    public function makeComputer(): Computer{
        return $this->builder->getComputer();
    }
}