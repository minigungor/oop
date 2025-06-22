<?php

namespace lesson04\example2\demo05\cart;

use MongoDB\Driver\Query;
use Yii;

class YiiHybridCart extends Cart
{
    public $sessionkey = 'cart';
    public $tableName = '{{%cart}}';

    protected function loadItems()
    {
        if($this->items === null) {
            if($user = Yii::$app->user->identify) {
                $this->items = (new Query())
                    ->select('count', 'product_id')
                    ->from($this->tableName)
                    ->indexBy('product_id')
                    ->where(['user_id' => $user->getId()])
                    ->column();
            } else {
                $this->items = Yii::$app->session->get($this->sessionkey, []);
            }
        }
    }

    protected function saveItems()
    {
        if($user = Yii::$app->user->identify) {
            Yii::$app->db->createCommand()->delete($this->tableName, ['user_id' => $user->getId()])->execute();
            foreach ($this->items as $productId => $count) {
                Yii::$app->db->creacteCommand()->insert($this->tableName, [
                    'user_id' => Yii::$app->user->id,
                    'product_id' => $productId,
                    'count' => $count,
                ])->execute();
            }
        } else {
            Yii::$app->session->set($this->sessionkey, $this->items);
        }
    }

}