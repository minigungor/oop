<?php

namespace lesson04\example2\demo09\cart\cost;

class BigCost implements CalculatorInterface
{
    private $next;
    private $percent;
    private $limit;

    public function __construct(CalculatorInterface $next, $percent, $limit)
    {
        $this->next = $next;
        $this->percent = $percent;
        $this->limit = $limit;
    }

    public function getCost(array $items)
    {
        $cost = $this->next->getCost($items);
        if($cost > $this->limit){
            return (1 - $this->percent / 100) * $cost;
        } else {
            return $cost;
        }
    }

}