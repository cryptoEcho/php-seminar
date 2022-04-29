<?php

require_once '../vendor/autoload.php';

//echo "tpl1<br>";
$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

// .......

$data = [
    'title' => 'My page title',
    'person' => [
        'name' => 'Maria<script>alert(1111);</script>',
        'lastname' => 'Fon Pauli'
    ]
];

$str = $twig->render('hello.twig.html', $data);
echo $str;
