<?php

namespace App\adapter\imagefilter\after;

use App\adapter\imagefilter\after\avaFilters\AvaFilterInterface;

class AvaFilterAdapter implements FilterInterface
{
    public function __construct(private AvaFilterInterface $avaFilter)
    {
        
    }

    public function apply(Image $image)
    {
        return $this->avaFilter->render($image);
    }
}