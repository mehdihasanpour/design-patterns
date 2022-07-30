<?php

namespace App\decorator\basket\after;

class ShippingCostDecorator extends AbstractCost
{
    public function getCost(): int
    {
        return 5;
    }

    public function getDescription(): string
    {
        return 'shipping';
    }
}