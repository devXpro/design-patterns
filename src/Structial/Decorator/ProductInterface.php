<?php

namespace Structial\Decorator;

interface ProductInterface
{
    public function getName():string;

    public function getPrice():float;

    public function getWeight():float;
}
