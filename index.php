<?php

use Creational\AbstractFactory\ShapeFactory;
use Creational\Builder\User;
use Creational\Factory\AppleFactory;
use Creational\Prototype\Apple;
use Creational\Prototype\AppleCloner;
use Creational\Singleton\Singleton;
use Structial\Adapter\CelvinToCelsiyAdapter;
use Structial\Adapter\Sensor1;
use Structial\Adapter\Sensor2;
use Structial\Adapter\Test;
use Structial\Decorator\Product;
use Structial\Decorator\ProductPriceDecorator;
use Structial\Decorator\TaraDecorator;
use Structial\Decorator\TranslateDecorator;

require_once 'vendor/autoload.php';


//Singleton

$s = Singleton::getInstance();
$s->setConnection('connection');
$g = Singleton::getInstance();

echo $g->getConnection();

//Factory
$f = new AppleFactory();
$a1 = $f->createApple(3,4);
$a2 = $f->createApple(3,4);

//AbstractFactory

$f = new ShapeFactory();
$s = $f->createShape('circle');
echo $s->getSquare();

//Builder

$u = new User();

//$u->setName('Ivan');
//$u->setAge(3);
//$u->setPhone(3234234234);

$u->setName('Ivan')
    ->setAge(3)
    ->setPhone(3234234234);

//Prototype
$a1 = new Apple('red', 44);
$a1->setWeight(50);

$ac = new AppleCloner();
$a2 = $ac->createApple($a1, 100);

var_dump($a1);
var_dump($a2);

//Decorator
$p = new Product('pinacolada', 10, 0.20);


echo "\n";
echo $p->getName();
echo "\n";
echo $p->getWeight();
echo "\n";
echo $p->getPrice();

$p = new ProductPriceDecorator($p, 1.5);
$p = new TranslateDecorator($p, 'ru');
$p = new TaraDecorator($p, 1);

$pd = new ProductPriceDecorator(new TranslateDecorator(new TaraDecorator($p, 1), 'ru'), 1.5);

echo "\n";
echo $p->getName();
echo "\n";
echo $p->getWeight();
echo "\n";
echo $p->getPrice();

//Adapter

$test = new Test();

$s1 = new Sensor1();
$s2 = new Sensor2();

$s2a = new CelvinToCelsiyAdapter($s2);

$test->f1($s1);
$test->f1($s2a);
