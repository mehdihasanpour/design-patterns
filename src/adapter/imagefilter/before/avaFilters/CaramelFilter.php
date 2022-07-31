<?php

namespace App\adapter\imagefilter\before\avaFilters;

use App\adapter\imagefilter\before\Image;

class CaramelFilter
{
    public function init()
    {

    }

    public function render(Image $image)
    {
        return 'caramel filter applied';
    }
}