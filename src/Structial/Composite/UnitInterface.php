<?php

namespace Structial\Composite;

interface UnitInterface
{
    public function getDamage():int;

    public function getHealth(): int;

    public function addUnit(UnitInterface $unit): self;
}
