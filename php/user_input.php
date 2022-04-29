<?php


// 1 - Проверка наличия токена X-Access-Token и его значения

if (array_key_exists( 'HTTP_X_ACCESS_TOKEN', $_SERVER)) {
    if($_SERVER['HTTP_X_ACCESS_TOKEN'] !== 'SECRET_TOKEN') {
        echo "Запрещено. Неверный токен<br>";
        die();
    }
}
else {
    echo "Запрещено. Не задан токен<br>";
    die();
}


// 2 - Проверка метода совершения запроса

if ($_SERVER["REQUEST_METHOD"] !== 'POST') {
    echo "Запрещено. Неверный метод<br>";
    die();
}


// 3 - Проверка наличия page в массиве GET и его значения

if (array_key_exists('page', $_GET)){
    if (htmlentities($_GET['page']) == 'page1' || $_GET['page'] == 'page2' || $_GET['page'] == 'page3'){
        echo "Запрошена страница [".htmlentities($_GET['page']).']<br>';
    }
    else{
        echo "Ошибка. Недопустимая страница<br>";
        die();
    }
}
else{
    echo 'Ошибка. Не задан тип страницы.<br>';
    die();
}


// 4 - Проверка наличия заголовка 'Content-Type' и его значения

if (array_key_exists('Content-Type', getallheaders())){
    if (getallheaders()['Content-Type'] !== 'application/x-www-form-urlencoded'){
        echo "Ошибка. Неверный тип данных.<br>";
        die();
    }
}
else{
    echo "Ошибка. Неверный тип данных.<br>";
    die();
}


// 5 - Проверка массива $_POST

if (count($_POST) == 0) {
    echo "Ошибка. Данные не заданы.";
    die();
}
echo 'Через POST передано '.count($_POST).' переменных<br>';


// 6 - Вывод массива $_POST на экран

foreach ($_POST as $key => $value){
    echo 'Значение['.htmlentities($key).'] : '.htmlentities($value).'<br>';
}
unset($key);
unset($value);

