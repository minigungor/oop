<?php

use demo04\graphics\Canvas;
use demo04\points\DecartPoint;

$canvas = new Canvas();
$point = new DecartPoint(5,3,7);

echo $canvas->paint($point) . PHP_EOL;

echo get_class($canvas) . PHP_EOL;
echo get_class($point) . PHP_EOL;