<?php

require_once 'ThisExample.php';

$Aobj = new ThisExample();
$Aobj->a = 10;
$Aobj->printA();
$Aobj->setA(20);
$Aobj->printA();
echo "try to use this in static method: ";
ThisExample::aStaticMethod();
