<?php

namespace lesson04\example2\demo09\cart\cost;

class MinCost implements CalculatorInterface
{
    private $calculators;

    public function __construct()
    {
        $calculators = func_get_arg();
        foreach($calculators as $calculator) {
            if(!$calculator instanceof CalculatorInterface) {
                throw new \InvalidArgumentException('Invalid Calculator');
            }
        }
        $this->calculators = $calculators;
    }

    public function getCost(array $items)
    {
        $costs = [];

        $k = 0;
        foreach ($this->calculators as $calculator) {
            $costs = $calculator->getCost($items);
        }
        return min($costs);
    }

}