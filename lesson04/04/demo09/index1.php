<?php

namespace lesson04\example4\demo09\example1;

use lesson04\example4\cart\storage\SessionStorage;
use lesson04\example4\cart\Cart;
use lesson04\example4\cart\cost\SimpleCost;

class CartController
{
    public function actionIndex()
    {
        $cart = new Cart(new SessionStorage('cart'), new SimpleCost());
        return $cart->getItems();
    }

    public function actionAdd($id,$count,$price)
    {
        $cart = new Cart(new SessionStorage('cart'), new SimpleCost());
        $cart->add($id,$count,$price);
        return 'OK';
    }
}