<?php

error_reporting(E_ALL);
if (isset($_POST['name']) and $_POST['name'] === 'Mary') {
    echo "Hello";
}
echo "ЗДАРОВА";
ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'].'/cookies');
session_start();