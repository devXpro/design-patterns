<?php

namespace Structial\Decorator;

class Product implements ProductInterface
{
    /** @var string */
    protected $name;

    /** @var float */
    protected $price;

    /** @var float */
    protected $weight;


    public function __construct(string $name, float $price, float $weight)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }


    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
}
