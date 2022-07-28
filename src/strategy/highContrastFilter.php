<?php

namespace App\strategy;

class highContrastFilter implements filterInterface
{
    public function filter():string
    {
        return 'high-contrast';
    }
}