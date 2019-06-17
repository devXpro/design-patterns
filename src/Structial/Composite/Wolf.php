<?php

namespace Structial\Composite;

class Wolf implements UnitInterface
{
    public function getDamage(): int
    {
        return 2;
    }

    public function getHealth(): int
    {
        return 10;
    }
}
