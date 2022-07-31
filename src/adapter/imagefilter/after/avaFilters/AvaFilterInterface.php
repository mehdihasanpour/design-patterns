<?php

namespace App\adapter\imagefilter\after\avaFilters;

use App\adapter\imagefilter\after\Image;

interface AvaFilterInterface
{
    public function init();

    public function render(Image $image);
}