<?php

$mysqli = new mysqli('localhost', 'defusr', 'password');
if ($mysqli->connect_error) {
    die('Ошибка подключения ('.$mysqli->connect_errno.')'
        .$mysqli->connect_error);
}
echo 'Соединение установлено '.$mysqli->host_info."server".$mysqli->get_server_info().PHP_EOL;
$charset = $mysqli->get_charset();
echo "charset".$charset->comment.'collation'.$charset->collation.PHP_EOL;
printf("Изначальная кодировка: %s\n", $mysqli->character_set_name());
/* изменение набора символов */
if (!$mysqli->set_charset("utf8mb4")) {
    printf("Ошибка при загрузке набора символов utf8mb4: %s\n", $mysqli->error);
    exit();
}
else {
    printf("Текущий набор символов: %s\n", $mysqli->character_set_name());
}

// выбор ДБ
$mysqli->select_db('stud1');
$result = $mysqli->query("SHOW TABLES");
//print(implode('',$result->fetch_all());
print_r($result);