<?php

namespace App\strategy;

class highContrastFilter implements filter
{
    public function filter():string
    {
        return 'high-contrast';
    }
}