<?php

use demo05\graphics\Canvas;
use demo05\points\DecartPoint;

include_once __DIR__ . '/graphics/Canvas.php';
include_once __DIR__ . '/graphics/Point.php';
include_once __DIR__ . '/points/Point.php';

$canvas = new Canvas();
$point = new DecartPoint(5,3,7);

echo $canvas->paint($point) . PHP_EOL;

echo get_class($canvas) . PHP_EOL;
echo get_class($point) . PHP_EOL;