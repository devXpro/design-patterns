<?php

namespace Creational\AbstractFactory;

class Circle implements ShapeInterface
{
    const NAME = 'circle';

    protected $radius = 10;

    public function getPerimeter()
    {
        return $this->radius * 2 * 3.14;
    }

    public function getSquare()
    {
        return pow($this->radius, 2) * 3.14;
    }

    public function getName()
    {
        return self::NAME;
    }
}
