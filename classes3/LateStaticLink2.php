<?php

class classA {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who();
    }
}

class classB extends classA {
    public static function who() {
        echo __CLASS__;
    }
}

classB::test();

