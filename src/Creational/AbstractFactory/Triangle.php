<?php

namespace Creational\AbstractFactory;


class Triangle implements ShapeInterface
{
    const NAME = 'triangle';

    public function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
    }

    public function getSquare()
    {
        // TODO: Implement getSquare() method.
    }

    public function getName()
    {
        return self::NAME;
    }
}