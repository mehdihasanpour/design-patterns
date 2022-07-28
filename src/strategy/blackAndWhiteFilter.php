<?php

namespace App\strategy;

class blackAndWhiteFilter implements filterInterface
{
    public function filter():string
    {
        return 'b&w';
    }
}