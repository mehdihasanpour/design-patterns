<?php

namespace Test\Unit\decorator\basket\after;

use App\decorator\basket\after\BasketCost;
use App\decorator\basket\after\ShippingCostDecorator;
use App\decorator\basket\after\TaxCostDecorator;
use Test\Support\CustomTestCase;

class basketTest extends CustomTestCase
{
    public function test_we_should_get_basket_cost_and_description()
    {
        $basket = new BasketCost();
        $this->assertSame(15, $basket->getCost());
        $this->assertSame('basket', $basket->getDescription());
    }

    public function test_we_should_get_basket_cost_and_description_with_shipping_cost()
    {
        $basket = new ShippingCostDecorator(new BasketCost);
        $this->assertSame(5, $basket->getCost());
        $this->assertSame(20, $basket->getTotalCost());
        $this->assertSame('shipping', $basket->getDescription());
        $this->assertCount(2, $basket->getDetails());
    }

    public function test_we_should_get_basket_cost_and_description_with_tax_cost()
    {
        $basket = new TaxCostDecorator(new BasketCost);
        $this->assertSame(1, $basket->getCost());
        $this->assertSame(16, $basket->getTotalCost());
        $this->assertSame('tax', $basket->getDescription());
        $this->assertCount(2, $basket->getDetails());
    }

    public function test_we_should_get_basket_cost_and_description_with_shipping_and_tax_cost()
    {
        $basket = new ShippingCostDecorator(new TaxCostDecorator(new BasketCost));
        $this->assertSame(5, $basket->getCost());
        $this->assertSame(21, $basket->getTotalCost());
        $this->assertSame('shipping', $basket->getDescription());
        $this->assertCount(3, $basket->getDetails());
    }
}