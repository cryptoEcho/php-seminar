<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud3', 'user1', '1111');

    $query = "SELECT `id`, `lastname`, `age` FROM `students` WHERE `age` > 18 LIMIT 0,5";
    // выполняем запрос
    $res = $dbh->query($query);
    var_dump($res);
    echo "Результат является iterable: ".is_iterable($res).PHP_EOL;
    foreach ($res as $row) {
        printf("%s %s %s" . PHP_EOL, $row[0], $row[1], $row[2]);
    }
    // освобожение ресурса
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}