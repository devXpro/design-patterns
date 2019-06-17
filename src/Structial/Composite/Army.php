<?php

namespace Structial\Composite;

class Army implements UnitInterface
{
    /** @var UnitInterface[] */
    protected $units;

    public function addUnit(UnitInterface $unit): self
    {
        $this->units[] = $unit;

        return $this;
    }

    /**
     * @param UnitInterface[] $units
     * @return self
     */
    public function addUnits(array $units): self
    {
        $this->units =  array_merge($this->units, $units);

        return $this;
    }

    public function getDamage(): int
    {
        $res = 0;
        foreach ($this->units as $unit){
            $res += $unit->getDamage();
        }

        return $res;

    }

    public function getHealth(): int
    {
        $res = 0;
        foreach ($this->units as $unit){
            $res += $unit->getHealth();
        }

        return $res;
    }








}