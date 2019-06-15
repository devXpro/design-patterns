<?php

namespace Structial\Decorator;

class ProductPriceDecorator implements ProductInterface
{
    /** @var ProductInterface */
    protected $product;

    /** @var float */
    protected $percent;

    /**
     * ProductPriceDecorator constructor.
     * @param ProductInterface $product
     * @param $percent
     */
    public function __construct(ProductInterface $product, $percent)
    {
        $this->product = $product;
        $this->percent = $percent;
    }

    public function getName(): string
    {
        return $this->product->getName();
    }

    public function getPrice(): float
    {
        return $this->product->getPrice() * $this->percent;
    }

    public function getWeight(): float
    {
        return $this->product->getWeight();
    }

}