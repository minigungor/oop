<?php

namespace demo03\graphics {
    interface Point {
        public function getPointCoordinates();
    }

    class Canvas
    {
        public function paint(Point $point)
        {
            list($x, $y, $z) = $point->getPointCoordinates();
            echo "[x = $x; y = $y; z = $z]\n";
        }
    }
}

##########################
namespace demo03\points {

    use demo03\graphics\Point as BasePoint;
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
}


##########################
namespace {

    use demo03\graphics\Canvas;
    use demo03\points\DecartPoint;

    $canvas = new Canvas();
    $point = new DecartPoint(5,3,7);

    echo $canvas->paint($point) . PHP_EOL;

    echo get_class($canvas) . PHP_EOL;
    echo get_class($point) . PHP_EOL;

}
