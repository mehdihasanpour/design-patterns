<?php

namespace App\decorator\basket\after;

abstract class AbstractCost implements BasketInterface
{
    public function __construct(protected BasketInterface $basket)
    {
    }

    public function getTotalCost(): int
    {
        return static::getCost() + $this->basket->getTotalCost();
    }

    public function getDetails(): array
    {
        return [
            ...$this->basket->getDetails(),
            static::getDescription() => static::getCost()
        ];
    }
}
