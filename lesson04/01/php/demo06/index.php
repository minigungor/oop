<?php

use demo06\graphics\Canvas;
use demo06\points\DecartPoint;

function autoLoad($class) {
    echo $class . PHP_EOL;
    exit;
}

spl_autoload_register('autoLoad');

$canvas = new Canvas();
$point = new DecartPoint(5,3,7);

echo $canvas->paint($point) . PHP_EOL;

echo get_class($canvas) . PHP_EOL;
echo get_class($point) . PHP_EOL;