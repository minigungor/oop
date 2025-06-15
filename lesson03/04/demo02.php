<?php

namespace lesson03\example4\demo02;

class Measurer
{
    public function maxSize($obj)
    {
        return max($obj->getWidth(), $obj->getHeight());
    }
}

class Table
{
    public function getWidth() {return 95;}
    public function getHeight(){return 12;}
}

$measure = new Measurer();
$table = new Table;

echo $measure->maxSize($table) . PHP_EOL;