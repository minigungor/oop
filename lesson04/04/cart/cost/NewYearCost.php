<?php

namespace lesson04\example4\cart\cost;

class NewYearCost implements CalculatorInterface
{
    private $next;
    private $percent;
    private $month;

    public function __construct(CalculatorInterface $next, $percent, $month)
    {
        $this->next = $next;
        $this->percent = $percent;
        $this->month = $month;
    }

    public function getCost(array $items)
    {
        $cost = $this->next->getCost($items);
        if($this->month == 12){
            return (1 - $this->percent / 100) * $cost;
        } else {
            return $cost;
        }
    }

}