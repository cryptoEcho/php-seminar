<?php

class MyClass {}
$a = new MyClass();
var_dump( $a instanceof MyClass); // bool(true)
$class = 'MyClass';
var_dump( $a instanceof $class); // bool(true)
$b = new MyClass();
var_dump( $a instanceof $b); // bool(true)
