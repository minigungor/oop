<?php

namespace lesson03\example5\demo09;

use Exception;

class Canvas
{
    public function paint(Point $point)
    {
        list($x, $y, $z) = $point->getPointCoordinates();
        return "[x = $x; y = $y; z = $z]\n";
    }

    // ...

}



abstract class Point {
    abstract public function getPointCoordinates();
}

class DecartPoint extends Point
{
    public $x;
    public $y;
    public $z;

    public function getPointCoordinates()
    {
        return [$this->x, $this->y, $this->z];
    }
}

class CilindricalPoint extends Point
{
    public $f;
    public $r;
    public $h;
    public function getPointCoordinates()
    {
        return [
            $this->r * cos($this->f),
            $this->r * sin($this->f),
            $this->h
        ];
    }
}

class SphericalPoint extends Point
{
    public $r;
    public $f;
    public $t;

    public function getPointCoordinates()
    {
        return [
            $this->r * cos($this->f) * sin($this->t),
            $this->r * sin($this->f) * cos($this->t),
            $this->r * cos($this->t)
        ];
    }
}

#######################

$canvas = new Canvas();

$point = new DecartPoint();

$point->x = 5;
$point->y = 7;
$point->z = -2;

echo $canvas->paint($point);

$point = new CilindricalPoint();

$point->f = 5;
$point->r = 7;
$point->h = -2;

echo $canvas->paint($point);

$point = new SphericalPoint();

$point->r = 5;
$point->t = 7;
$point->f = -2;

echo $canvas->paint($point);

