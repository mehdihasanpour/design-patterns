<?php

namespace App\strategy;

class blackAndWhiteFilter implements filter
{
    public function filter():string
    {
        return 'b&w';
    }
}