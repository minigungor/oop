<?php

namespace lesson02\example3\demo05;

class Discount {
    public function calcCost($cost)
    {
        if($cost >= 1000) {
            return $cost * 0.95;
        } else {
            return $cost;
        }
    }
}

$discount = new Discount();

echo $discount->calcCost(850);
echo $discount->calcCost( 1100);