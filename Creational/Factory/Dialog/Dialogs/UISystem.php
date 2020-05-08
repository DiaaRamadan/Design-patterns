<?php


namespace Src\Creational\Factory\Dialog\Dialogs;


use Src\Creational\Factory\Dialog\Buttons\Button;
use Src\Creational\Factory\Dialog\Buttons\UIButton;

class UISystem extends Dialog
{
    /**
     * @return Button
     */
    public function createButton(): Button
    {
        return new UIButton();
    }
}