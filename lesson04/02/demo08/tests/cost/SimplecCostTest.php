<?php

namespace lesson04\example2\demo08\tests\storage;

use lesson04\example2\demo08\cart\cost\SimpleCost;
use lesson04\example2\demo08\cart\CartItem;

class SimplecCostTest extends \PHPUnit\Framework\TestCase
{
    public function testCalculate()
    {
        $calculator = new SimpleCost();
        $this->assertEquals(1000, $calculator->getCost([
            5 => new CartItem(5,2,200),
            7 => new CartItem(7,4,150)
        ]));
    }
}