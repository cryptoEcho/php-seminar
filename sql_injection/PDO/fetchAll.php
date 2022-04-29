<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud3', 'user1', '1111');
    // установим режим fetch по умолчанию
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//    $dbh->setAttribute(19, 2);

    $query = "SELECT `id`, `lastname`, `age` FROM `students` WHERE `age` > 18 LIMIT 0,5";
    // выполняем запрос
    $res = $dbh->query($query);
    $arrayRes = $res->fetchAll(); // вернет все найденные строки в формате двумерного массива
//    $arrayRes = $res->fetchAll(PDO::FETCH_ASSOC); // вернет ассоциативный массив
//    $arrayRes = $res->fetchAll(PDO::FETCH_NUM); // вернет простой массив
//    $arrayRes = $res->fetchAll(PDO::FETCH_BOTH); // вернет оба типа
//    $arrayRes = $res->fetchAll(PDO::FETCH_OBJ); // вернет массив обьектов
    print_r($arrayRes);
    // освобожение ресурса
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}