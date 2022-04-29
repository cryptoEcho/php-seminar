<?php

// проверка метода запроса
function check_request_method(string $method): void {
    if (isset($_SERVER["REQUEST_METHOD"])){
        if ($_SERVER["REQUEST_METHOD"] !== $method)
            throw new PDOException('bad request method', 400);
    }
    else
        throw new PDOException('no request method', 406);
}

// соединение с БД
function DBconnection(): PDO {
    $dsn = 'mysql:host=localhost;dbname=banksdb;charset=utf8';
    $username = 'defusr';
    $password = 'password';

    return new PDO($dsn, $username, $password);
}


// логирование ошибок
function logger($e) {
    $log_file = '../../error.log'; // путь к файлу недоступен со стороны клиента
    // если не существует файла, создать его
    if (!file_exists($log_file)) {
        file_put_contents($log_file, '');
    }
//    var_dump($_SERVER);
    date_default_timezone_set('Europe/Moscow');
    $time = date('D d.m.y H:i:s', time());

    $uri = $_SERVER["PHP_SELF"];
    $contents = file_get_contents($log_file);

    $contents .= "[$time]\t$uri error ". $e->getCode() . "\t" . $e->getMessage() . "\r";
//    $contents .= "[$time]\terror $e->errorInfo()\r";

    file_put_contents($log_file, $contents);
}

// проверка наличия необходимого параметра
function isset_required_getparam(string $param): void {
    if (!isset($_GET[$param])) {
        throw new PDOException('get parameter wasn`t set', 10000);
    }
}


function developJSON(): void {
    if (isset($_SERVER['CONTENT_TYPE'])) {
        if ($_SERVER['CONTENT_TYPE'] == 'application/json') {
            function isValidJSON($str) {
                json_decode($str);
                return json_last_error() == JSON_ERROR_NONE;
            }

            $json_params = file_get_contents("php://input");

            if (strlen($json_params) > 0 && isValidJSON($json_params))
                $_POST = json_decode($json_params, true);
            else
                throw new PDOException('bad json');
        }
    }
}