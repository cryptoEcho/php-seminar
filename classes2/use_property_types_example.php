<?php

//declare(strict_types=1); // раскомментируйте эту строку чтобы включить строгую проверку типов

require_once 'PropertyTypesExample.php';
require_once 'ComplexNumber.php';

$obj1 = new PropertyTypesExample();
//echo "before initialization: int = ".$obj1->getIntVal().PHP_EOL; // this line shall cause PHP Fatal error:  Uncaught Error: Typed property PropertyTypesExample::$intVal must not be accessed before initialization in
$obj1->setIntVal(10.7);
$obj1->setComplexNumberVal( new ComplexNumber( 0.1, 0.7 ) );
echo 'int val: '.$obj1->getIntVal().PHP_EOL;
echo 'complex val:';
var_dump( $obj1->getComplexNumberVal() );
