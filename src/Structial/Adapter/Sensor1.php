<?php

namespace Structial\Adapter;

class Sensor1 implements TemperatureCelsiyInterface
{
    public function getTemperatureInCelsiy(): float
    {
       return 100;
    }
}
