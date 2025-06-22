<?php

namespace lesson04\example2\demo09\cart\cost;

class SimpleCost implements CalculatorInterface
{
    public function getCost(array $items)
    {
        $cost = 0;
        foreach ($items as $item) {
            $cost += $item->getCost;
        }
        return $cost;
    }
}