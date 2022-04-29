<?php

ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'].'/cookies');
session_name('MySession');
session_start();
var_dump($_SESSION);

if ($_SESSION['is_auth']) {
    echo "Ну здравствуй, Владик";
}
