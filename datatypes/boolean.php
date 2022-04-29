<?php

$a = true; //true // $b = TRUE; True
$b = (int) $a; // false => 0 | true => 1 // явное преобразование типа
//$a = FALSE;
//$a = False;
var_dump( is_bool(true) ); // true
//is_bool('false'); // false
//is_bool(0); // false
//is_bool(); is_int(); is_float(); is_string(); is_callable(); is_resource(); is_null(); is_object(); is_array()
echo 'тип переменной A = '.gettype($a).', boolean: '.is_bool($a).PHP_EOL; // true => '1' // неявное преобразование типа
//var_dump(is_bool($a));  // bool
//var_dump((string)is_bool($a)); // string
// выведет тип переменной A = boolean, boolean: 1
//exit;
// преобразование к int при сложении
echo 'after addition: '.($a+2).PHP_EOL; // неявное преобразование bool к int
echo 'after concatenation '.$a.PHP_EOL;
// выведет after addition: 3
//$a = '';
$a = -2;
if( $a == true ) {
    echo "A is true".PHP_EOL;
}
else {
    echo "A is false".PHP_EOL;
}

$t = (string) true; // => 1 => '1'
echo "empty string is: [".$t."]".PHP_EOL;