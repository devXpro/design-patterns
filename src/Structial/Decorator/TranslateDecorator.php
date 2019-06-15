<?php

namespace Structial\Decorator;

class TranslateDecorator implements ProductInterface
{
    /** @var ProductInterface */
    protected $product;

    /** @var string */
    protected $language;

    /**
     * TranslateDecorator constructor.
     * @param ProductInterface $product
     * @param string $language
     */
    public function __construct(ProductInterface $product, string $language)
    {
        $this->product = $product;
        $this->language = $language;
    }

    public function getName(): string
    {
        if ($this->language !== 'en') {
            return str_replace('a', 'o', $this->product->getName());
        }

        return $this->product->getName();
    }

    public function getPrice(): float
    {
        return $this->product->getPrice();
    }

    public function getWeight(): float
    {
        return $this->product->getWeight();
    }

}