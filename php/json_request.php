<?php


function isValidJSON($str) {
    json_decode($str);
    return json_last_error() == JSON_ERROR_NONE;
}

var_dump($_SERVER);
$json_params = file_get_contents("php://input");

if (strlen($json_params) > 0 && isValidJSON($json_params))
    $_POST = json_decode($json_params, true);
else {
    echo "JSON ISNT VALID";
}

