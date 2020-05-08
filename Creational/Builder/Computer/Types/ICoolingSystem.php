<?php


namespace Src\Creational\Builder\Computer\Types;


interface ICoolingSystem
{
    public function coolDown(int $temp): bool ;
}