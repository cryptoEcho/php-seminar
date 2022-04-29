<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud3;charset=utf8', 'user1', '1111');

    // альтернативный вариант (для более старых версий)
    $dbh2 = new PDO(
        "mysql:host=localhost;dbname=stud3", $user, $pass,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        )
    );

    // освобожение ресурса
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    $dbh = null;
}