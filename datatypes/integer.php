<?php

// MIN and MAX value for int
echo 'max int: '.PHP_INT_MAX.PHP_EOL;
echo 'max int: '.PHP_INT_MIN.PHP_EOL;

$a = PHP_INT_MAX;
var_dump($a); // выведет int(…)
$a++; // произойдет переполнение
echo "after overflow: ";
var_dump($a); // выведет float(…)

$a = true; // '1'
//$var = is_int($a);
echo "is int A: ".var_export( is_int($a), true ).PHP_EOL;

$b = 2 + $a;
echo "B = ".$b.PHP_EOL;
$strVar = '12345';
echo "явное преобразование numeric string:";
var_dump( intval( $strVar ) ); // явное преобразование
echo "неявное преобразование numeric string:";
var_dump( 10+$strVar );  // неявное преобразование '12345' => 12345
$strVarBadNumeric = '5 yellow rabbits';
echo "явное преобразование bad numeric string: ";
var_dump( intval( $strVarBadNumeric ) ); // явное преобразование
//echo "неявное преобразование bad numeric string:";
//var_dump( 10+$strVarBadNumeric );  // неявное преобразование '5 yellow rabbits' => 5 => NOTICE
$strVarBadNumeric = 'ABCDE';
echo "явное преобразование not numeric:";
var_dump( intval( $strVarBadNumeric ) ); // явное преобразование 'ABCDE' => 0
//echo "неявное преобразование bad numeric string:";
//var_dump( 10+$strVarBadNumeric );  // неявное преобразование 'ABCDE' => 0 => WARNING

$sum = 0;
for($i = 0; $i < 5; $i++) {
    $sum += $i;
}
echo "SUM = ".$sum.PHP_EOL;


