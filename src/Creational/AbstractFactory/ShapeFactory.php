<?php

namespace Creational\AbstractFactory;

class ShapeFactory
{
    public function createShape(string $shapeName): ShapeInterface
    {
        if($shapeName === Triangle::NAME){
            return new Triangle();
        } elseif ($shapeName === Circle::NAME){
            return new Circle();
        } else{
            throw new \Exception('Shape does not support');
        }
    }
}
