<?php

namespace Structial\Composite;

class Tank implements UnitInterface
{
    public function getDamage(): int
    {
        return 100;
    }

    public function getHealth(): int
    {
        return 200;
    }
}
