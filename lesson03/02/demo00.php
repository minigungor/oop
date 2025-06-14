<?php

namespace lesson03\example2\demo00;

use mysql_xdevapi\Exception;

abstract class Animal
{
    public $color;
    public $weight;

    public function sleep()
    {
        // ...
    }
    abstract public function voice();

}

class Dog extends Animal
{
    public function voice()
    {
        return 'raw-raw';
    }

    public function aport()
    {
        // ...
    }
}

class Cat extends Animal
{
    public function voice()
    {
        return 'meow-meow';
    }
}

class Tiger extends Animal
{
    public function voice()
    {
        return 'rawr';
    }
    public function eat(Animal $animal)
    {
        if($animal instanceof Tiger) {
            throw new Exception('я не ...');
        }
    }
}

$dog = new Dog();
echo $dog->color . PHP_EOL;
echo $dog->weight . PHP_EOL;
echo $dog->aport() . PHP_EOL;

$cat = new Cat();
echo $cat->color . PHP_EOL;
echo $cat->weight . PHP_EOL;

$tiger = new Tiger();
echo $tiger->color . PHP_EOL;
echo $tiger->weight . PHP_EOL;

$tiger->eat($cat);
$tiger->eat($dog);
