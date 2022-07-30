<?php

namespace App\decorator\basket\after;

interface BasketInterface 
{
    public function getCost():int;

    public function getDescription(): string;

    public function getTotalCost(): int;

    public function getDetails(): array;
}