<?php

namespace lesson04\example2\demo09\cart\cost;

use lesson04\example2\demo09\cart\CartItem;

interface CalculatorInterface
{
    public function getCost(array $items);
}