<?php

//declare(strict_types=1);
try {
    $dbh = new PDO('mysql:host=localhost;dbname=stud3;charset=utf8', 'user1', '1111');
    // используются безымянные placeholders - ?
    $query = "SELECT `id`, `lastname`, `firstname` FROM `students` WHERE `age` > ?";
    echo "Query to be executed: ".$query."<hr>";
    // подготовка запроса
    $sth = $dbh->prepare( $query );
    // выполнение запроса
    $age = $_GET['age']; // необходимо так же фильтровать значения
    $sth->execute( [$age] );
//    $sth->execute( $_GET ); // bad practice
    $data = $sth->fetchAll();
    echo "students data: <br><pre>";
    print_r($data);
    echo "";
} catch (PDOException $e) {
    echo "No students found<br>";
//    echo "Error!: " . $e->getMessage() . PHP_EOL;
//    print_r($e); // можно записать подробную информацию об ошибке в лог файл
    $dbh = null;
}

