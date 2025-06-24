<?php

namespace lesson04\example4\cart\cost;

use lesson04\example4\cart\CartItem;

interface CalculatorInterface
{
    public function getCost(array $items);
}