<?php

namespace lesson04\example4\cart\storage;

use lesson04\example4\cart\CartItem;

interface StorageInterface
{
    public function load();

    public function save(array $items);
}