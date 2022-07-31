<?php

namespace App\adapter\imagefilter\before;

interface FilterInterface
{
    public function apply(Image $image);
}