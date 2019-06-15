<?php

namespace Creational\Prototype;

class AppleCloner
{
    public function createApple(Apple $apple, int $weight): Apple
    {
        $newApple = clone $apple;
        $newApple->setWeight($weight);

        return $newApple;
    }
}
