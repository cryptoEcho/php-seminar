<?php

class classA {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class classB extends classA {
    public static function who() {
        echo __CLASS__;
    }
}

classB::test();

