<?php

namespace App\state;

class canvas
{
    public function __construct(private toolType $toolType)
    {
    }

    public function giveCanvas()
    {
        return match($this->toolType){
            toolType::SELECTION => new selectionCanvas,
            toolType::BRUSH => new brushCanvas,
            toolType::ERASE => new eraseCanvas
        };
    }
}