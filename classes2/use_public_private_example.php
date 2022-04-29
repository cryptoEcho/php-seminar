<?php

require_once 'PublicPrivateExample.php';

$object = new PublicPrivateExample();
$object->printAB();
$object->a = 10; // корректно, a имеет модификатор public
//$object->b = 15; // ошибка, b имеет модификатор private

$object->setB(15); // установка private свойства через специальный метод
//$object->printAB();
echo "b = ".$object->getB().PHP_EOL;
//
//// обращение к публичной константе
//echo "Значение константы: ".PublicPrivateExample::PUBLIC_CONST.PHP_EOL;
////echo "Значение константы 2: ".PublicPrivateExample::PRIVATE_CONST.PHP_EOL; // ошибка, доступ к приватной константе из глобального контекста
////$object->privateFunction(); // ошибка, privateFunction имеет модификатор private
////echo PublicPrivateExample::PRIVATE_CONST; // ошибка, PRIVATE_CONST имеет модификатор private
//$object->accessPrivateConstantAndMethod(); // внутри метода класса, доступ к приватным методам и константам разрешен
