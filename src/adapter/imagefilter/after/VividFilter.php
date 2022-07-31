<?php

namespace App\adapter\imagefilter\after;

class VividFilter implements FilterInterface
{
    public function apply(Image $image)
    {
        return 'vivid filter applied';
    }
}
