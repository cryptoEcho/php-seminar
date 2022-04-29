<?php

$a = 1;
$b = 2;
//echo $a+$b;
$Sum = $a + $b;

echo "Sum: ";
echo $sum; // error, undefined variable, typo
exit;
$str1 = "Sum";
$str2 = "sum";

echo PHP_EOL.PHP_EOL;
if( $str1 == $str2 ) {
    echo "Equal".PHP_EOL;
}
else {
    echo "Not equal".PHP_EOL;
}

$int1 = 1;
$str2 = "1 sum";

if( $int1 == $str2 ) {
    echo $int1." and ".$str2." are Equal";
}
else {
    echo "Not equal";
}

function myFunc1() {
}

//function MYFUNC1() { // wrong - function exist
//}