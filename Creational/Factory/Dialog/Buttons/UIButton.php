<?php


namespace Src\Creational\Factory\Dialog\Buttons;


class UIButton extends Button
{

    public function show(): string
    {
        return "<UIButton props = '{click me}'></UIButton>";
    }

    public function click(): void
    {
        // TODO: Implement click() method.
    }
}