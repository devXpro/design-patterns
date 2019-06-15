<?php

namespace Structial\Adapter;

class Test
{
    public function f1(TemperatureCelsiyInterface $celsiy)
    {
        echo $celsiy->getTemperatureInCelsiy();
    }
}