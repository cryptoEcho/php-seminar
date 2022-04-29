<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud3', 'user1', '1111');
    // получаем текущий режим отображения ошибок
//    echo "err mode: ".$dbh->getAttribute(PDO::ATTR_ERRMODE); // PDO::ERRMODE_SILENT, 0

    // установим режим обработки ошибок
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // намеренно внесем ошибку в тело запроса - опечатку в названии поля
    $query = "INSERT INTO `students` (`IDd`, `lastname`, `firstname`, `grid`, `age`) VALUES (NULL, 'Тест22', 'ТестИ22', '3', 21);";
    // выполняем запрос
    $res = $dbh->exec($query); // будет сгенерировано PDOException
    echo "Запись добавлена!".PHP_EOL;

    // освобожение ресурса
    $dbh = null;
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . PHP_EOL;
//    print_r($e); // можно записать подробную информацию об ошибке в лог файл
//    print_r( $e->getTrace() );
    $dbh = null;
}
