<?php

namespace App\decorator\basket\before;

class BasketWithTaxCost extends BasketCost
{
    public function getCost(): int
    {
        return parent::getTotalCost()*0.09;
    }

    public function getDescription(): string
    {
        return 'tax';
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
