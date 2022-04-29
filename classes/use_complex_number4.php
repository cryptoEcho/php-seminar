<?php

require_once 'ComplexNumber.php';

$a = new ComplexNumber(0.1, 0.2);
$b = new ComplexNumber(0.3, 0.4);
$c = ComplexNumber::addition( $a, $b );

var_dump($c);
