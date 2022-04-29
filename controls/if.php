<?php

$a = random_int(1, 3);
//$a = '1';
echo "a = ".$a.PHP_EOL;
if( $a === 1 ) {  // проверка условия 1
    // инструкции если выполняется условие 1
    echo "First condition";
}
elseif( $a === 2 ) {  // проверка условия 2
    // инструкции если выполняется условие 2
    echo "Second condition";
    // блоков elseif может быть сколь угодно много
}
else {
    // если не сработало ни одно из условий
    echo "No match";
}

//1 -2 'ererwy' [1] true ====> true
//0 '' [] false null =====> false

$a = 2;
//if( $a > 5 && $a < 10 && !($b==1) ) {
//}
//if( $a > 1 || $a < -10 ) {
//}

// GET page
//if( $_GET['page'] == 'page1' ) {
//    echo 'page1';
//}
if( array_key_exists( 'page', $_GET ) && $_GET['page'] == 'page1' ) {
    echo 'page1';
}

$a = 5;
$b = '5';
if( $a === $b ) {
    echo PHP_EOL.var_export($a, true).' is '.var_export($b, true).PHP_EOL;
}
else {
    echo PHP_EOL.var_export($a, true).' is not '.var_export($b, true).PHP_EOL;
}


//$a = 5; //присваивание
//($a == 5) => true false; // сравнение
//$a === 5 // сравнение => true false;
// == ===
// != !==

if( true ) {
    echo 1;
    echo 2;
    echo 3;
}


//$a = [];
//if( !$a ) {
//    echo "inside IF []";
//}


//while(true) {
////    if($i++>5) {
////        break;
////    }
//}