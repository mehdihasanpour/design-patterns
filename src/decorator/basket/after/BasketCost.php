<?php

namespace App\decorator\basket\after;

class BasketCost implements BasketInterface
{
    public function getCost(): int
    {
        return 15;
    }

    public function getDescription(): string
    {
        return 'basket';
    }

    public function getTotalCost(): int
    {
        return self::getCost();
    }

    public function getDetails(): array
    {
        return [
            self::getDescription()=>self::getCost()
        ];
    }
}