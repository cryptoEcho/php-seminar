<?php

require_once 'ClassWithDestructor.php';

echo "Start".PHP_EOL;
$A = new ClassWithDestructor(); // будет вызван конструктор класса
$B = $A; // B это просто ссылка на A, при присвоении объекта создается ссылка! Поэтому и конструктор не вызывается второй раз

echo "No we going to clone A".PHP_EOL;
$C = clone $A; // не вызывается конструктор

echo "No we going to delete A".PHP_EOL;
unset($A); // деструктор не будет вызван, так как есть еще одна ссылка на объект
echo "No we going to delete B".PHP_EOL;
unset($B); // в этот момент будет вызван деструктор

