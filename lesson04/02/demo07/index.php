<?php

use lesson04\example2\demo07\cart\storage\YiiSessionStorage;
use lesson04\example2\demo07\cart\storage\YiiDbStorage;
use lesson04\example2\demo07\cart\Cart;

require_once __DIR__ . '/vendor/autoload.php';

if($user = Yii::$app->user->identity) {
    $storage = new YiiDbStorage($user->getId());
} else {
    $storage = new YiiSessionStorage('cart');
}

$cart = new Cart($storage);

$cart->add(5,6,100);

echo $cart->getCost() . PHP_EOL;