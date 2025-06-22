<?php

namespace lesson04\example2\demo09\cart\cost;

class BirthDayCost implements CalculatorInterface
{
    private $next;
    private $percent;
    private $birthDate;
    private $currentDate;

    public function __construct(CalculatorInterface $next, $percent, $birthDate, $currentDate)
    {
        $this->next = $next;
        $this->percent = $percent;
        $this->birthDate = $birthDate;
        $this->currentDate = $currentDate;
    }

    public function getCost(array $items)
    {
        $birthDate = \DateTime::createFromFormat('Y-m-d', $this->birthDate);
        $currentDate = \DateTime::createFromFormat('Y-m-d', $this->currentDate);
        if($currentDate->format('m-d') == $birthDate->format('m-d')) {
            return (1 - $this->percent / 100) * $this->next->getCost($items);
        } else {
            return $this->next->getCost($items);
        }
    }

}