<?php

require_once 'ExtClass.php';

$b = new ExtClass();
// проверка вызова private и protected методов внутри класса
//$b->callProtectedMethods();

// попытка вызвать protected метод из глобального контекста
$b->protectedMethod(); // нельзя, можно вызыватьтолько из методов класса
