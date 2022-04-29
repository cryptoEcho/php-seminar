<?php

class ClassWithStaticMethod
{
    static string $varStatic = 'Статическое свойство';

    public static function aStaticMethod()
    {
        echo "inside ".__CLASS__."::".__FUNCTION__.' and varstatic is '.self::$varStatic.PHP_EOL;
    }
}

ClassWithStaticMethod::aStaticMethod(); // вызов статического метода aStaticMethod
$classname = 'ClassWithStaticMethod';
$classname::aStaticMethod(); // То же самое, начиная с PHP 5.3.0
echo "Свойство: ".ClassWithStaticMethod::$varStatic.PHP_EOL;
//ClassWithStaticMethod::$varStatic = 'TEST';
//echo "Свойство: ".ClassWithStaticMethod::$varStatic.PHP_EOL;
