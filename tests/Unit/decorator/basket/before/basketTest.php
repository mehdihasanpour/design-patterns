<?php

namespace Test\Unit\decorator\basket\before;

use App\decorator\basket\before\BasketCost;
use App\decorator\basket\before\BasketWithShippingAndTaxCost;
use App\decorator\basket\before\BasketWithShippingCost;
use App\decorator\basket\before\BasketWithTaxCost;
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
        $basket = new BasketWithShippingCost();
        $this->assertSame(5, $basket->getCost());
        $this->assertSame(20, $basket->getTotalCost());
        $this->assertSame('shipping', $basket->getDescription());
        $this->assertCount(2, $basket->getDetails());
    }

    public function test_we_should_get_basket_cost_and_description_with_tax_cost()
    {
        $basket = new BasketWithTaxCost();
        $this->assertSame(1, $basket->getCost());
        $this->assertSame(16, $basket->getTotalCost());
        $this->assertSame('tax', $basket->getDescription());
        $this->assertCount(2, $basket->getDetails());
    }

    public function test_we_should_get_basket_cost_and_description_with_shipping_and_tax_cost()
    {
        $basket = new BasketWithShippingAndTaxCost();
        $this->assertSame(5, $basket->getCost());
        $this->assertSame(21, $basket->getTotalCost());
        $this->assertSame('shipping', $basket->getDescription());
        $this->assertCount(3, $basket->getDetails());
    }
}