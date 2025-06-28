<?php

namespace lesson05\grasp\example02\demo01;

use lesson04\example4\cart\Cart;
use lesson04\example4\cart\storage\SessionStorage;
use lesson04\example4\cart\cost\SimpleCost;


$cart = new Cart(new SessionStorage('cart'), new SimpleCost());

$cart->add(5,6,100);

echo $cart->getItems() . PHP_EOL;