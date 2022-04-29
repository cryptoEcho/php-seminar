<?php

require_once 'ComplexNumber.php';

$a = new ComplexNumber(0.1, 0.2); // создание экземпляра класса
$b = new ComplexNumber(0.4, 0.5); // создание экземпляра класса
$a->addComplex( $b );
//$a->addComplex( new StdClass() );
var_dump( $a );
