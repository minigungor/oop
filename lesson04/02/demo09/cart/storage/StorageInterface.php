<?php

namespace lesson04\example2\demo09\cart\storage;

use lesson04\example2\demo09\cart\CartItem;

interface StorageInterface
{
    public function load();

    public function save(array $items);
}