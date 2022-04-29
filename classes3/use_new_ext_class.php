<?php

require_once 'BaseClass.php';
require_once 'NewExtClass.php';

$base = new BaseClass();
$ext = new NewExtClass();
$base->printObjectVars();
$ext->printObjectVars();

//$ext->printParentObjectVars();
