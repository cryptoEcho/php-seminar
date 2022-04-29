<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud3', 'user1', '1111');
    // установим режим обработки ошибок
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $lastName = 'ФамПодгЗапрос2';
    $firstName = 'ИмяПодгЗапрос2';
    $grid = 11;
    $age = 23;
    // нет экранирования (не используюся placeholders), уязвимость при выполнении запроса
    $query = "INSERT INTO `students` (`lastname`, `firstname`, `grid`, `age`) 
        VALUES ('{$lastName}', '{$firstName}', '{$grid}', {$age});";
    // подготовка запроса
    $sth = $dbh->prepare( $query );
    // выполнение запроса
    $sth->execute();

    // освобожение ресурса
    $dbh = null;
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . PHP_EOL;
//    print_r($e); // можно записать подробную информацию об ошибке в лог файл
    $dbh = null;
}