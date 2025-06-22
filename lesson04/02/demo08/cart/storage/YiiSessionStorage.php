<?php

namespace lesson04\example2\demo08\cart\storage;

class YiiSessionStorage implements StorageInterface
{
    private $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function load()
    {
        return Yii::$app->session->get($this->key, []);
    }

    public function save(array $items)
    {
        return Yii::$app->session->set($this->key, $items);
    }

}