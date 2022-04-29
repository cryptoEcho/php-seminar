<?php

echo "max int: ".PHP_INT_MAX.PHP_EOL;
$a = 1;
echo "is int A: ".var_export( is_int($a), true).PHP_EOL.PHP_EOL;
$a = true;
$b = $a + 2;
echo "b = ".$b.PHP_EOL;
