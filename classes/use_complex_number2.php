<?php

require_once 'ComplexNumber.php';

$a = new ComplexNumber(0.1, 0.2); // создание экземпляра класса
// ($a)
$a->add(0.4,0.5); // вызов метода add
var_dump( $a );
$b = $a;
// ($a, $b)
$a->add(0.2, 0.3);
var_dump( $b );
unset($a);
// ($b)
var_dump( $b );

$c = new ComplexNumber(0.1, 0.1);
// ($b)    ($c)
$d = $b;
// ($b,$d)    ($c)