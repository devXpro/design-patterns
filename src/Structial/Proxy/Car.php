<?php

namespace Structial\Proxy;

class Car implements CarInterface
{
    public function getColor(): string
    {
        return 'red';
    }

    public function getTransmission(): string
    {
       return 'manual';
    }
}