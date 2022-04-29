<?php

try {
    // dsn, user and his password
    $dsn = 'mysql:host=localhost;dbname=banksdb;charset=utf8';
    $username = 'defusr';
    $password = 'password';

    // проверка метода запроса
    if ($_SERVER["REQUEST_METHOD"] !== "GET")
        throw new PDOException('bad request method', 400);

    // db connection
    $pdo_db = new PDO($dsn, $username, $password);

// режим обработки ошибок. Все ошибки будут генерировать PDOException
    $pdo_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['table'])) {
        if ($_GET['table'] === 'bank') {

            $query = "
SELECT bank.title as bank, city.title as city, owner.full_name as owner, banktype.type as `bank type`
FROM banksdb.bank
INNER JOIN banksdb.city
	ON bank.city_id = city.city_id
INNER JOIN banksdb.owner
	ON bank.owner_id = owner.owner_id
INNER JOIN banksdb.banktype
	ON bank.type_id = banktype.bankType_id
ORDER BY owner.full_name;
"; // end of sql request

        } elseif ($_GET['table'] === 'client') {

            $query = "
SELECT client.first_name as name, client.last_name as `last name`, city.title as city, bank.title as bank
FROM banksdb.client
INNER JOIN banksdb.city
	ON client.city_id = city.city_id
INNER JOIN banksdb.bank_client
	ON client.client_id = bank_client.client_id
INNER JOIN banksdb.bank
	ON bank_client.bank_id = bank.bank_id
ORDER BY client.first_name;
"; // end of sql request

        } else {
            throw new PDOException('wrong value for `table`');
        }
    }
    else {
        throw new PDOException('required parameter wasn`t set');
    }


    $request = $pdo_db->prepare($query);
    $request->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);

    // возвращение результата
    $json = json_encode($result); // ,JSON_PRETTY_PRINT)
    print $json;

    // закрытие подключения к БД
    $pdo_db = null;
} catch (PDOException $e) {
//    print "Error!: " . $e->getMessage() . "<br/>";
//    print_r($e);
//    $e->getTrace();


    $pdo_db = null;
}

