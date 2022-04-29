<?php

class classA {
    public static function who() {
        echo __CLASS__.PHP_EOL;
    }
    public static function test() {
        self::who();
    }
    public static function test2() {
        static::who(); // Здесь действует позднее статическое связывание
    }
}

class classB extends classA {
    public static function who() {
        echo __CLASS__.PHP_EOL;
    }
}

classB::test();
classB::test2();
