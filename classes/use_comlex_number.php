<?php

require_once 'ComplexNumber.php';

$a = new ComplexNumber(); // cоздание экземпляра класса
$a->real = 0.1; // обращение к свойству real
$a->imaginary = 0.2; // обращение к свойству imaginary
$a->add(0.4,0.5); // вызов метода add
var_dump( $a );
//echo "A number = {$a}".PHP_EOL;
