<?php

echo 'Enter number: ';
$number = (int)fgets(STDIN);
var_dump($number);

switch ($number) {
    case 0:
    case 1:
    case 2:
        echo "i меньше чем 3, но неотрицательный";
        break;
    case '3':
        echo "i равно 3";
        break;
    default:
        echo "i больше 3";
}
