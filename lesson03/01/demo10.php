<?php

namespace lesson03\example1\demo10;

class Base
{
    public function first()
    {
        return 'first';
    }

    protected function second()
    {
        return 'second';
    }
}

class Sub extends Base
{
    public function first()
    {
        return 'first_2 ' . $this->second();
    }
}

$base = new Base();

echo $base->first() . PHP_EOL;

$sub = new Sub();

echo $sub->first() . PHP_EOL;