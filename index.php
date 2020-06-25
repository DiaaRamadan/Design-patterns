<?php


use Src\Creational\Builder_2\Director;
use Src\Creational\Builder_2\Vehicles\CarBuilder;
use Src\Creational\Builder_2\Vehicles\TruckBuilder;

require_once __DIR__ . "/../vendor" . DIRECTORY_SEPARATOR . "autoload.php";


$director_2 = new Director(new CarBuilder());
$truck = new Director(new TruckBuilder());
print_r($truck->getVehicle()->getDoors()->getNumberOfDoors());