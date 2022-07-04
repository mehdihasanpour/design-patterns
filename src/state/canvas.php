<?php

namespace App\state;

class canvas
{
    public function __construct(private canvasInterface $toolType)
    {
    }

    public function mouseUp(){
        return $this->toolType->mouseUp();
    }

    public function mouseDown(){
        return $this->toolType->mouseDown();
    }
}