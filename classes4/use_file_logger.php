<?php

require_once 'FileLogger.php';

$logger = new FileLogger('tmp.log');
$logger->logEvent('Test event 1', __FILE__, __LINE__, __FUNCTION__);
sleep(2);
$logger->logEvent('Test event 2', __FILE__, __LINE__, __FUNCTION__);
