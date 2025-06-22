<?php

namespace lesson04\example2\demo09\tests\storage;

use lesson04\example2\demo09\cart\cost\NewYearCost;
use lesson04\example2\demo09\cart\CartItem;

class NewYearCostTest extends \PHPUnit\Framework\TestCase
{
    public function testActive()
    {
        $calculator = new NewYearCost(new DummyCost(1000),12, 5);
        $this->assertEquals(950, $calculator->getCost([
            5 => new CartItem(5,2,200),
            7 => new CartItem(7,4,150)
        ]));
    }

    public function testNone()
    {
        $calculator = new NewYearCost(new DummyCost(1000),9, 5);
        $this->assertEquals(1000, $calculator->getCost([
            5 => new CartItem(5,2,200),
            7 => new CartItem(7,4,150)
        ]));
    }
}