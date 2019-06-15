<?php

namespace Creational\Factory;

class Apple
{
    /** @var string */
    private $color;

    /** @var string */
    private $size;

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
}
