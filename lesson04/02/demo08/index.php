<?php

use lesson04\example2\demo08\cart\storage\YiiSessionStorage;
use lesson04\example2\demo08\cart\storage\YiiDbStorage;
use lesson04\example2\demo08\cart\Cart;
use lesson04\example2\demo08\cart\cost\SimpleCost;

require_once __DIR__ . '/vendor/autoload.php';

if($user = Yii::$app->user->identity) {
    $storage = new YiiDbStorage($user->getId());
} else {
    $storage = new YiiSessionStorage('cart');
}

$calculator = new SimpleCost();

$cart = new Cart($storage, $calculator);

$cart->add(5,6,100);

echo $cart->getCost() . PHP_EOL;