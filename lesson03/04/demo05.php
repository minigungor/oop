<?php

namespace lesson03\example4\demo05;

abstract class Measurable
{
    abstract public function getWidth();
    abstract public function getHeight();
}

class Measurer
{
    public function maxSize(Measurable $obj)
    {
        return max($obj->getWidth(), $obj->getHeight());
    }
}

class Table extends Measurable
{
    public function getWidth() {return 95;}
    public function getHeight() {return 12;}
    public function getColor() {return 0xFF0000;}
    public function getMaterial() {return 'wood';}
}

class Kettle extends Measurable
{
    public function move($x, $y){ }
    public function getWidth() {return 9;}
    public function getHeight() {return 4;}
    public function getColor() {return 0xFF0000;}
}

class Border
{
    public function getWidth() {return 9;}
    public function getHeight() {return 4;}
}

class Lamp
{
    public function move($x, $y){ }
    public function getColor() {return 0xFF0000;}
}

$measure = new Measurer();
$table = new Table;

echo $measure->maxSize($table) . PHP_EOL;

$table = new Kettle();
echo $measure->maxSize($table) . PHP_EOL;
