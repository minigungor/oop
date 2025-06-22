<?php

namespace lesson04\example2\demo09\tests\cost;

use lesson04\example2\demo09\cart\cost\CalculatorInterface;

class DummyCost implements CalculatorInterface
{
    private $value;

    private function __constrict($value)
    {
        $this->value = $value;
    }

    public function getCost(array $items)
    {
        return $this->value;
    }
}