<?php

namespace App\state;

class selectionCanvas implements canvasInterface
{
    public function mouseUp()
    {
        return 'selection';
    }

    public function mouseDown()
    {
        return 'selection down';
    }
}
