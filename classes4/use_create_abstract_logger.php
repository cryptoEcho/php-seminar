<?php

// ошибка - попытка создать абстрактный класс
require_once 'AbstractLogger.php';
$logger = new AbstractLogger(AbstractLogger::TYPE_SCREEN); // нельзя создавать экземпляр абстрактного класса
