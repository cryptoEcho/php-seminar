<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud3', 'user1', '1111');
    // установим режим обработки ошибок
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ошибки

    // используются именные placeholders
    // его принято начинать с двоеточия
    $query = "INSERT INTO `students` (`lastname`, `firstname`, `grid`, `age`) 
        VALUES (:lastN,:firstN,:grid,:age);";
    // подготовка запроса
    $sth = $dbh->prepare( $query );
    // привязка переменных
    // первым аргументом является имя placeholder’а
    $sth->bindParam(':lastN', $lastname);
    $sth->bindParam(':firstN', $firstname);
    $sth->bindParam(':grid', $grid);
    $sth->bindParam(':age', $age);
    // установка значений
    $lastname = 'ФамПодгЗапрос7';
    $firstname = 'ИмяПодгЗапрос7';
    $grid = 17;
    $age = 27;
    // выполнение запроса
    $sth->execute();
    $result = $sth->fetchAll();
    var_dump($result);
    // освобожение ресурса
    $dbh = null;
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . PHP_EOL;
//    print_r($e); // можно записать подробную информацию об ошибке в лог файл
    $dbh = null;
}