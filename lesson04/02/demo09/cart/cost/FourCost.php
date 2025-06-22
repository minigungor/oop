<?php

namespace lesson04\example2\demo09\cart\cost;

class FourCost implements CalculatorInterface
{
    private $next;

    public function __construct(CalculatorInterface $next)
    {
        $this->next = $next;
    }

    public function getCost(array $items)
    {
        $cost = $this->next->getCost($items);

        $k = 0;
        foreach ($items as $item) {
            if($k % 4 === 3) {
                $cost = $this->next->getCost($items) - 1;
            }
            $k++;
        }
        return $cost;
    }

}