<?php

use Src\Creational\Builder\Builders\ComputerWithCoolingSystemBuilder;
use Src\Creational\Builder\Director;

require_once __DIR__ . "/../vendor" . DIRECTORY_SEPARATOR . "autoload.php";


$director = new Director(new ComputerWithCoolingSystemBuilder());

var_dump($director->makeComputer());