<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud3;charset=utf8', 'user1', '1111');
    // установим режим обработки ошибок
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // используются безымянные placeholders - ?
    $query = "INSERT INTO `students` (`lastname`, `firstname`, `grid`, `age`) 
        VALUES (?,?,?,?);";
    // подготовка запроса
    $sth = $dbh->prepare( $query );
    // выполнение запроса
    $data1 = [ 'ФамПодгЗапрос4', 'ИмяПодгЗапрос4', 12, 24 ];
    $sth->execute( $data1 );
    $data2 = [ 'ФамПодгЗапрос5', 'ИмяПодгЗапрос5', 13, 25 ];
    $sth->execute( $data2 );

} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . PHP_EOL;
//    print_r($e); // можно записать подробную информацию об ошибке в лог файл
    $dbh = null;
}