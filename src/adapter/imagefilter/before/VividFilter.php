<?php

namespace App\adapter\imagefilter\before;

class VividFilter implements FilterInterface
{
    public function apply(Image $image)
    {
        return 'vivid filter applied';
    }
}
