<?php

namespace App\decorator\basket\after;

class TaxCostDecorator extends AbstractCost
{
    public function getCost(): int
    {
        return $this->basket->getTotalCost() * 0.09;
    }

    public function getDescription(): string
    {
        return 'tax';
    }
}