<?php

namespace lesson04\example4\cart\cost;

class FridayCost implements CalculatorInterface
{
    private $next;
    private $percent;
    private $date;

    public function __construct(CalculatorInterface $next, $percent, $date)
    {
        $this->next = $next;
        $this->percent = $percent;
        $this->date = $date;
    }

    public function getCost(array $items)
    {
        $now = \DateTime::createFromFormat('Y-m-d', $this->date);
        if($now->format('l') == 'Friday'){
            return (1 - $this->percent / 100) * $this->next->getCost($items);
        } else {
            return $this->next->getCost($items);
        }
    }

}