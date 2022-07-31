<?php

namespace App\adapter\imagefilter\after;

interface FilterInterface
{
    public function apply(Image $image);
}