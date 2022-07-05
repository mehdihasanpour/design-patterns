<?php

namespace App\iterator;

interface IteratorInterface
{
    public function hasNext():bool;
    public function current():string;
    public function next():void;
}