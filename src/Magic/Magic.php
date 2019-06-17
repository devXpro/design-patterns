<?php

namespace Magic;


class Magic
{
    public $prop = 'apple';
    public $prop1 = 'pie';

    public function f1($m){
        echo $m;
    }
    public function __construct()
    {
        //object create

        echo "\n". 'object created';
    }

    public function __destruct()
    {
        // object destroy

        echo "\n". 'object destroyed';
    }

    public function __clone()
    {
        echo   "\n". 'object cloned';

    }

    public function __call($name, $arguments)
    {
        $this->f1($name);
    }

    public function __set($name, $value)
    {
        echo   "\n". 'property '.$name. ' with value '.$value ;
    }

    public function __get($name)
    {
        echo   "\n". 'property '.$name ;
    }

    public function __invoke()
    {
        return  "\n".  'invoke call';
    }

    public function __toString()
    {
        return self::class;
    }
    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }
    public function __unset($name)
    {
        // TODO: Implement __unset() method.
    }

    public function __sleep()
    {
       return ['prop'];
    }

    public function __debugInfo()
    {
        // TODO: Implement __debugInfo() method.
    }

    public function __wakeup()
    {
        echo  "\n".  'deserialize complete';
    }
}