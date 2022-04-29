<?php

try {
    // создание подключения через connection_string с указанием типа базы
    $dbh = new PDO('mysql:host=localhost;dbname=stud3;charset=utf8', 'user1', '1111');
    // установим режим обработки ошибок
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // заполнение БД тестовыми данными
    $baseLastName = 'Иванов';
    $baseFirstName = 'Иван';

    /* вытащим все группы */
    $queryGr = "SELECT `grid` FROM `groups`";
    if (!($result = $dbh->query($queryGr )) ) {
        echo "Ошибка: Группы не заданы".PHP_EOL;
        exit();
    }
    $groups = $result->fetchAll();

    mt_srand();

    /* подготавливаем запрос на вставку строк */
    $query = "INSERT INTO `students` (`lastname`, `firstname`, `grid`, `age`) 
        VALUES (:lastN,:firstN,:grid,:age);";
    $sth = $dbh->prepare($query);
    // привязка переменных
    // первым аргументом является имя placeholder’а
    $sth->bindParam(':lastN', $lastname);
    $sth->bindParam(':firstN', $firstname);
    $sth->bindParam(':grid', $grid);
    $sth->bindParam(':age', $age);

    for($i=0; $i<=2000; $i++) {
        $grKey = rand( 0, count( $groups ) - 1 );
        $lastname = $baseLastName.$i;
        $firstname = $baseFirstName.$i;
        $grid = $groups[$grKey]['grid'];
        $age = rand( 18, 25 );
        /* выполняем запрос */
        $sth->execute();
        echo "Запись ".$lastname." добавлена".PHP_EOL;
    }

    // освобожение ресурса
    $dbh = null;
    $sth = null;
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . PHP_EOL;
//    print_r($e); // можно записать подробную информацию об ошибке в лог файл
    $dbh = null;
}
