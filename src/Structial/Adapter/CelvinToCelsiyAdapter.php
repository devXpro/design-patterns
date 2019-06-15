<?php

namespace Structial\Adapter;

class CelvinToCelsiyAdapter implements TemperatureCelsiyInterface
{
    /** @var TemperatureCelvinInterface */
    protected $sensor;

    /**
     * CelvinToCelsiyAdapter constructor.
     * @param TemperatureCelvinInterface $sensor
     */
    public function __construct(TemperatureCelvinInterface $sensor)
    {
        $this->sensor = $sensor;
    }

    public function getTemperatureInCelsiy(): float
    {
        return $this->sensor->getTemperatureInCelvin() / 20;
    }
}
