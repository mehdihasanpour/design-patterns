<?php

namespace App\state;

class eraseCanvas implements canvasInterface
{
    public function mouseUp()
    {
        return 'erase';
    }

    public function mouseDown()
    {
        return 'erase down';
    }
}
