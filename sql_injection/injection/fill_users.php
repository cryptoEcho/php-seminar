<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=stud1', 'user1', '1111');
    $tmpLogin = 'login';
    $tmpPwd = 'pwd';
    $tmpName = 'User Number ';
    /* подготавливаем запрос на вставку строк */
    $query = "INSERT INTO `users` (`login`, `pwd`, `name`) 
        VALUES (?,?,?);";

    // соединение больше не нужно, закрываем
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


