<?php

use demo07\graphics\Canvas;
use demo07\points\DecartPoint;

function autoLoad($class) {
    require_once dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
}

spl_autoload_register('autoLoad');

$canvas = new Canvas();
$point = new DecartPoint(5,3,7);

echo $canvas->paint($point) . PHP_EOL;

echo get_class($canvas) . PHP_EOL;
echo get_class($point) . PHP_EOL;