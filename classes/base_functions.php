<?php

$a = new StdClass;

echo "A type is ".gettype($a).PHP_EOL;
echo "is_object() for A gives ".var_export(is_object($a), true).PHP_EOL;
echo "A belongs to ".get_class($a)." class".PHP_EOL;
var_dump($a);
