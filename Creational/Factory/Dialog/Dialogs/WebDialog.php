<?php


namespace Src\Creational\Factory\Dialog\Dialogs;


use Src\Creational\Factory\Dialog\Buttons\Button;
use Src\Creational\Factory\Dialog\Buttons\WebButton;

class WebDialog extends Dialog
{

    /**
     * @return Button
     */
    public function createButton(): Button
    {
        return new WebButton();
    }
}