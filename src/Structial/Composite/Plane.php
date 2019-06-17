<?php

namespace Structial\Composite;

class Plane implements UnitInterface
{
    public function getDamage(): int
    {
        return 300;
    }

    public function getHealth(): int
    {
        return 100;
    }
}
