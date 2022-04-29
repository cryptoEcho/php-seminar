<?php

require_once 'LoggerBuffer.php';

$logger = new LoggerBuffer(10);
//$logger->addItem(['test']);
$logger->logEvent( 'Test1', __FILE__, __LINE__, __FUNCTION__ );
$logger->logEvent( 'Test2', __FILE__, __LINE__, __FUNCTION__ );
$logger->logEvent( 'Test3', __FILE__, __LINE__, __FUNCTION__ );
echo "printing log: ".PHP_EOL;
$logger->printLog();
