<?php


namespace Src\Creational\Factory\Dialog\Dialogs;

use Src\Creational\Factory\Dialog\Buttons\Button;

abstract class Dialog
{
    abstract public function createButton(): Button;

    public function renderDialog(): string {
        return "
        ###############################
        {$this->createButton()->show()}
        ###############################
        ";
    }
}