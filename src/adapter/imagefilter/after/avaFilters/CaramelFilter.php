<?php

namespace App\adapter\imagefilter\after\avaFilters;

use App\adapter\imagefilter\after\Image;

class CaramelFilter implements AvaFilterInterface
{
    public function init()
    {

    }

    public function render(Image $image)
    {
        return 'caramel filter applied';
    }
}