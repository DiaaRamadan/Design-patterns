<?php


namespace Src\Creational\Factory\Dialog\Buttons;


class WebButton extends Button
{

    /**
     * @return string
     */
    public function show(): string
    {
        return "<button>Web Button</button>";
    }

    public function click(): void
    {
        // TODO: Implement click() method.
    }
}