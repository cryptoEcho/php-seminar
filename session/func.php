<?php

function set_session_params():void {
    ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'].'/cookies');
    ini_set('session.use_strict_mode', 1);
    session_name('MySession');
    
    session_set_cookie_params(
    [
        'httponly' => true,
        'sameSite' => 'strict',
        'domain' => 'localhost',
        'path' => '/session'
    ]
);
}

function check_request_method(string $method): void {
    echo "NONONO";
    if (isset($_SERVER["REQUEST_METHOD"])){
        echo "----------------------\n";
        var_dump($_SERVER["REQUEST_METHOD"]);
        echo "\n";
        var_dump($method);
        echo "\n";
        var_dump($method !== $_SERVER["REQUEST_METHOD"]);

        echo "WTF";
        echo "----------------------\n";
        if ($_SERVER["REQUEST_METHOD"] !== $method) {
            header("HTTP/1.1 400");
            throw new Exception('bad request methosd', 422);
        }
    }
    else {
        header("HTTP/1.1 400");
        throw new Exception('no request method', 406); //unique case
    }


}


// логирование ошибок
function logger(Exception $e) {
    $security_errors = [401, 403];
    if (in_array($e->getCode(), $security_errors)) {
        $log_file = '../../security_error.log'; // путь к файлу недоступен со стороны клиента
    }
    else {
        $log_file = '../../error.log'; // путь к файлу недоступен со стороны клиента
    }
    // если не существует файл, создать его
    if (!file_exists($log_file)) {
        file_put_contents($log_file, '');
    }
//    var_dump($_SERVER);
    date_default_timezone_set('Europe/Moscow');
    $time = date('D d.m.y H:i:s', time());

    $uri = $_SERVER["PHP_SELF"];
    $contents = file_get_contents($log_file);

    $contents .= "[$time]\t$uri\t error ". $e->getCode() . "\t" . $e->getMessage() . "\r";
//    $contents .= "[$time]\terror $e->errorInfo()\r";

    file_put_contents($log_file, $contents);
}

// from JSON body to $_POST
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


function DBconnection(): PDO {
    $dsn = 'mysql:host=localhost;dbname=task-52;charset=utf8';
    $username = 'defusr';
    $password = 'password';

    return new PDO($dsn, $username, $password);
}

function CheckCredentials(string $login, string $password) {
    
    $dbh = DBconnection();
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query_check = 'SELECT `id`
    FROM `users`
    WHERE `login`=:login AND `password`=:password;
    ';
    
    $sth = $dbh->prepare($query_check);
    $sth->bindValue('login', $login, PDO::PARAM_STR);
    $sth->bindValue('password', $password, PDO::PARAM_STR);
    $sth->execute();
    
    $result = $sth->fetch(PDO::FETCH_ASSOC); 
    $array = array(
        "is_correct" => boolval($sth->rowCount()),
        "user_id" => $result["id"]
    );

    $dbh = null;

    return $array;
}