<?php

require_once 'SelfExample.php';

SelfExample::printHello();
SelfExample::printSelf();
//echo SelfExample::$a;

$object = new SelfExample();
$object->c = 'Cvalue';
SelfExample::printVarForObject( $object );

//$object2 = new StdClass();
//$object2->c = 'anotherCvalue';
//SelfExample::printVarForObject( $object2 );
