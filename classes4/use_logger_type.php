<?php

declare(strict_types=1);
require_once 'ScreenLogger.php';

function logMessage( Logger $logger, string $message, string $file, int $line, string $function )
{
    $logger->logEvent('A type '.get_class($logger).' passed to '.__FUNCTION__, $file, $line, $function);
    $logger->logEvent($message, $file, $line, $function);
}

$screenLogger = new ScreenLogger();
logMessage( $screenLogger, 'A test message', __FILE__, __LINE__, '' );
if( $screenLogger instanceof Logger ) {
    echo "Screeen logger is instance of logger!".PHP_EOL;
}
