<?php

namespace Structial\Decorator;

class TaraDecorator implements ProductInterface
{
    /** @var ProductInterface */
    protected $product;

    /** @var float */
    protected $taraWeight;

    public function __construct(ProductInterface $product, $taraWeight)
    {
        $this->product = $product;
        $this->taraWeight = $taraWeight;
    }

    public function getName(): string
    {
        return $this->product->getName();
    }

    public function getPrice(): float
    {
        return $this->product->getPrice();
    }

    public function getWeight(): float
    {
        return $this->taraWeight + $this->product->getWeight();
    }

}