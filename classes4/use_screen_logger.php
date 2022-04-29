<?php

require_once 'ScreenLogger.php';

$logger = new ScreenLogger();
$logger->logEvent('Test event 1', __FILE__, __LINE__, __FUNCTION__);
sleep(2);
$logger->logEvent('Test event 2', __FILE__, __LINE__, __FUNCTION__);
