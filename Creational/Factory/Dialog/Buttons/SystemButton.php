<?php


namespace Src\Creational\Factory\Dialog\Buttons;


class SystemButton extends Button
{

    /**
     * @return string
     */
    public function show(): string
    {
        return "system button";
    }

    public function click(): void
    {
        // TODO: Implement click() method.
    }
}