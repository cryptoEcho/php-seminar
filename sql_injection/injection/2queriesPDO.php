<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=stud3', 'user1', '1111');

    // два запроса через ;
    $query = "SELECT `id`, `lastname`, `age` FROM `students` WHERE `age` > 18 LIMIT 0,5; INSERT INTO `students` (`ID`, `lastname`, `firstname`, `grid`, `age`) VALUES (NULL, 'ТестФ', 'ТестИ', '3', 21);";
    // выполняем запрос - выполнится оба
    $res = $dbh->query($query);
    foreach ( $res as $row ) {
        printf("%s %s %s".PHP_EOL, $row[0], $row[1], $row[2] );
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}