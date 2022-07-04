<?php

namespace App\state;

class brushCanvas implements canvasInterface
{
    public function mouseUp()
    {
        return 'brush';
    }

    public function mouseDown()
    {
        return 'brush down';
    }
}
