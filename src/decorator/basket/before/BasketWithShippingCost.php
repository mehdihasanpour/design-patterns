<?php

namespace App\decorator\basket\before;

class BasketWithShippingCost extends BasketCost
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
        return parent::getCost() + self::getCost();
    }

    public function getDetails(): array
    {
        return [...parent::getDetails(),
            self::getDescription() => self::getCost()
        ];
    }
}
