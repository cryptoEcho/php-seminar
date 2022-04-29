<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud3', 'user1', '1111');
    // установим режим обработки ошибок
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $lastName = 'ФамПодгЗапрос1';
    $firstName = 'ИмяПодгЗапрос1';
    $grid = 10;
    $age = 22;
    // нет экранирования, уязвимость при выполнении запроса
    $query = "INSERT INTO `students` (`lastname`, `firstname`, `grid`, `age`) 
        VALUES ('{$lastName}', '{$firstName}', '{$grid}', {$age});";
    $dbh->exec( $query );

    // освобожение ресурса
    $dbh = null;
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . PHP_EOL;
//    print_r($e); // можно записать подробную информацию об ошибке в лог файл
    $dbh = null;
}