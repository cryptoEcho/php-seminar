<?php

require_once 'SelfExample.php';

$obj1 = new SelfExample();
$obj2 = new SelfExample();
echo "A value for object2: ".$obj2->getA().PHP_EOL;
$obj1->setA('HOHOHO');
echo "A value for object2: ".$obj2->getA().PHP_EOL;
echo "A value for class: ".SelfExample::$a.PHP_EOL; // то же самое
