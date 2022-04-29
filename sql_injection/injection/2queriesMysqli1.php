<?php

// подключение к БД
$mysqli = new mysqli('localhost', 'root', '1111', 'stud3');
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}
$query = "SELECT `id`, `lastname`, `age` FROM `students` WHERE `age` > 18 LIMIT 0,5; INSERT INTO `students` (`ID`, `lastname`, `firstname`, `grid`, `age`) VALUES (NULL, 'ТестФ', 'ТестИ', '3', 21);";
/**
 * $mysqli->query выполняет только один запрос, поэтому будет возвращена ошибка
 */
if ($mysqli->query($query)) {
    if ($result = $mysqli->use_result()) {
        while ($row = $result->fetch_row()) {
            printf("%s %s %s".PHP_EOL, $row[0], $row[1], $row[2] );
        }
        $result->close();
    }
}
else {
    echo "Ошибка запроса: ".$mysqli->error;
}
