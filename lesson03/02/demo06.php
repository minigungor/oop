<?php

namespace lesson03\example2\demo06;

class Loader
{
    protected function load($url)
    {
        $loader = new Loader();
        return $loader->load($url);
    }
}

class Parser extends Loader
{
    public function getPage($url)
    {
        return $this->load($url);
    }
}

class Exchanger extends Loader
{
    public function getRate($currency)
    {
        $loader = new Loader();
        return $loader->load('...?id=' . $currency);
    }
}

$parser = new Parser();
$parser->getPage('...');

$exchanger = new Exchanger();
$exchanger->getRate('USD');