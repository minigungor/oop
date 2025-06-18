<?php

namespace demo06\points;

use demo06\graphics\Point as BasePoint;

class DecartPoint implements BasePoint
{
    private $x;
    private $y;
    private $z;

    public function __construct($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getPointCoordinates()
    {
        return [$this->x, $this->y, $this->z];
    }
}