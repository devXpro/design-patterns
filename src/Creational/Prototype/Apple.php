<?php

namespace Creational\Prototype;

class Apple
{
    /** @var string */
    private $color;

    /** @var string */
    private $size;

    /** @var int */
    protected $weight;

    /**
     * Apple constructor.
     * @param string $color
     * @param string $size
     */
    public function __construct($color, $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }


}
