<?php

// get запрос
// http://localhost:8006/phprequest.php?page=1&name=Ivan
echo "Значение массива GET: <br>";
echo $_GET;
echo "<br>";
print_r($_GET);
echo "<br>";
var_dump($_GET);
echo "<br>";
var_export($_GET);
echo "<br>";
echo $_GET['page'];
echo  htmlentities($_GET['name']);
//if ($_GET['page']) ==
echo "<br><br><br>POST Запрос:";
var_dump($_POST);
echo "<br>";
print($_POST['namePost']);

if (array_key_exists('namePost', $_POST)){
    echo "<br>Значение namePost из масива POST:<br>";
    echo htmlentities($_POST['namePost']);
}
else {
    echo "namePost not set <br>";
}
