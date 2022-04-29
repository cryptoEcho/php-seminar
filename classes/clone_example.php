<?php

require_once 'SimpleClass.php';

$a = new SimpleClass();
$a->var = 'tttt';

$b = clone $a;
$a->var = '444444';

var_dump($b);

$c = $a;
$a->var = '77777';

var_dump($c);