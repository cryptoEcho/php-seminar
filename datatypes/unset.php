<?php

// Переменная $a еще не существует
$a = "Hello there!";
// Теперь $a инициализирована
// ... какие-то команды, использующие $a
echo $a;
// А теперь удалим переменную $a
unset($a);
// Теперь переменная $a опять не существует
echo $a; // Предупреждение: нет такой переменной $a
