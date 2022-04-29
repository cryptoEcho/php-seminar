<?php

try {
    require('func.php');
    // проверка метода запроса
    check_request_method("POST");

    // db connection
    $pdo_db = DBconnection();

    // режим обработки ошибок. Все PDO ошибки будут генерировать PDOException
    $pdo_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // проверка на передачу параметров при помощи JSON
    developJSON();

//     проверка наличия переданных параметров для добавления новой записи
    if (!isset($_POST['bank_id'], $_POST['client_id'])) {
        throw new PDOException('post parameters have not been set', 412);
    }


    // sql запрос
    $query_insert = "
INSERT INTO banksdb.bank_client (bank_client_id, bank_id, client_id)
VALUES (NULL, ?, ?)
";


    // присвоение переменных для последующего использования
    // при помощи intval некорректные значения будут отброшены
    // при полностью некорректном id будет получено значение 0, которое отсутствует в таблицах
    $bank_id = intval($_POST['bank_id']);
    $client_id = intval($_POST['client_id']);



    // проверка на корректность введённых значений
    // проверить существование id в соответствующей таблице
    $params = array(
        0 => 'bank_id',
        1 => 'client_id'
    );

    foreach($params as $param) {
        $query_check = "
SELECT COUNT(*)
FROM " . str_replace('_id', '', $param) ."
WHERE " . $param ." = :param
"; // универсальный запрос с подстановкой полей таблиц из запроса

        $request_check = $pdo_db->prepare($query_check);
        $request_check->bindValue('param', ${$param}, PDO::PARAM_INT);
        $request_check->execute();
        // если count = 0, то такого значения id не существует => ошибка. Иначе count=1 выполнение программы продолжается
        if (!($request_check->fetchColumn())) {
            throw new PDOException('chosen id doesn`t exist', 404); // указанный параметр отсутствует в смежной таблице
        }
    }

    // выполнение запроса на добавление записи
    $request = $pdo_db->prepare($query_insert);
    $request->execute([$bank_id, $client_id]);

    $answer = array(
        "status" => "success",
        "id" => $pdo_db->lastInsertId() // id последней затронутой записи
);

    // вывод ответа пользователю
    $json = json_encode($answer, JSON_PRETTY_PRINT);
    print $json;

    $pdo_db = null;
}
catch (PDOException $e) {
    // ошибка подключения БД
    if ($e->getCode() === 2002 or $e->getCode() === 1049 or $e->getCode() === 1045) {
        print json_encode([]);
        logger(new PDOException('Database connection error', $e->getCode()));
    }

    // неверный метод запроса
    elseif ($e->getCode() === 400) {
        http_response_code(400);
        logger($e);
    }
    else { // всё остальное при попытке добавить
        $answer = array(
            "status" => 'error',
            "message" => 'Failed to add record'
        );
        http_response_code(400);
        print json_encode($answer, JSON_PRETTY_PRINT);
        logger($e);
    }

    $pdo_db = null;
}
catch (Error $e) {
    print json_encode([], JSON_PRETTY_PRINT);
    logger($e);
    $pdo_db = null;
}
