<?php

namespace lesson04\example2\demo07\cart\storage;

use lesson04\example2\demo07\cart\CartItem;

class YiiDbStorage implements StorageInterface
{
    private $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function load()
    {
        $items = [];
        foreach (CartModel::find()->with('product')->andWhere(['user_id' => $this->userId])->each() as $row) {
            $items[$row->product_id] = new CartItem($row->product_id, $row->product->price, $row->count);
        }
        return $items;
    }

    public function save(array $items)
    {
        CartModel::deleteAll(['user_id' => $this->userId]);
        foreach ($items as $item) {
            CartModel::getDb()->createCommand()->insert(CartModel::tableName(),[
                'user_id' => $this->userId,
                'product_id' => $item->getId(),
                'count' => $item->getCount()
            ])->execute();
        }
    }
}

class CartModel extends ActiveRecord
{

}