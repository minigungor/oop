<?php

namespace lesson04\example2\demo05\cart;

use Yii;

class YiiCart extends Cart
{
    public $sessionkey = 'cart';

    protected function loadItems()
    {
        if($this->items === null) {
            $this->items = Yii::$app->session->get($this->sessionkey, []);
        }
    }

    protected function saveItems()
    {
        Yii::$app->session->set($this->sessionkey, $this->items);
    }

}