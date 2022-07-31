<?php

namespace App\adapter\imagefilter\before;

class ImageView
{
    public function __construct(public Image $image)
    {
    }

    public function apply(FilterInterface $filter)
    {
        return $filter->apply($this->image);
    }
}