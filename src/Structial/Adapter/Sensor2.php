<?php

namespace Structial\Adapter;

class Sensor2 implements TemperatureCelvinInterface
{
    public function getTemperatureInCelvin(): float
    {
        return 111;
    }
}
