<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud1', 'defusr', 'password');
    // установим режим обработки ошибок
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // намеренно внесем ошибку в тело запроса - опечатку в названии поля
    $query = "INSERT INTO `students` (`IDd`, `lastname`, `firstname`, `grid`, `age`) VALUES (NULL, 'Тест22', 'ТестИ22', '3', 21);";
    // выполняем запрос
    $res = $dbh->exec($query); // вернет false
    // запись не добавлена, запрос не выполнен, но мы это никак не обрабатываем
    echo "Запись добавлена!".PHP_EOL; // это неправда

    // освобожение ресурса
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    print_r($e);
    $e->getTrace();
    die();
}