<?php

namespace App\adapter\imagefilter\after\avaFilters;

use App\adapter\imagefilter\after\Image;

class AwlFilter implements AvaFilterInterface
{
    public function init()
    {

    }

    public function render(Image $image)
    {
        return 'awl filter applied';
    }
}