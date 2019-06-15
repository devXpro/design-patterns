<?php

namespace Creational\Factory;

class AppleFactory
{
    public function createApple($color, $size)
    {
        return new Apple($color, $size);
    }
}
