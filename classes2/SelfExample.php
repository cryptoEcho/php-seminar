<?php

class SelfExample
{
    static string $a = 'HELLO';
    static string $b = 'WORLD';

    public string $c;

    static public function printHello()
    {
        echo self::$a.' '.self::$b.PHP_EOL;
    }

    static public function printSelf()
    {
//        echo 'a: '.self::$a.PHP_EOL;
        echo 'self: '.self::class.PHP_EOL;
//        echo 'self2: '.SelfExample::class.PHP_EOL;
    }

    static public function printVarForObject( selfx $selfObject )
    {
        echo "Object class is ".get_class($selfObject);
        echo "Object member c is ".$selfObject->c;
    }

    public function setA( string $newA )
    {
        self::$a = $newA;
    }

    public function getA(): string
    {
        return self::$a;
    }
}
