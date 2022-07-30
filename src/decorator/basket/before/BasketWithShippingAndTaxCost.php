<?php

namespace App\decorator\basket\before;

class BasketWithShippingAndTaxCost extends BasketWithTaxCost
{
    public function getCost(): int
    {
        return 5;
    }

    public function getDescription(): string
    {
        return 'shipping';
    }

    public function getTotalCost(): int
    {
        return parent::getTotalCost() + self::getCost();
    }

    public function getDetails(): array
    {
        return [...parent::getDetails(),
            self::getDescription() => self::getCost()
        ];
    }
}
