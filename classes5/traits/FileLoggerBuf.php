<?php

require_once 'BaseLogger.php';

class FileLoggerBuf extends BaseLogger
{
    /**
     * FileLoggerBuf constructor.
     * @param string $fileName - название файла
     * @param int $bufferSize - размер буфера
     */
    public function __construct(string $fileName, int $bufferSize )
    {
    }

    public function logEvent(string $message, string $file, int $line, string $function)
    {
        // TODO: Implement logEvent() method.
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}

$logger = new FileLoggerBuf('tmp.log', 3);
$logger->logEvent('Test event 1', __FILE__, __LINE__, __FUNCTION__);
$logger->logEvent('Test event 2', __FILE__, __LINE__, __FUNCTION__);
$logger->logEvent('Test event 3', __FILE__, __LINE__, __FUNCTION__);
// в этот момент логгер должен сохранить 3 записи в файл tmp.log
$logger->logEvent('Test event 4', __FILE__, __LINE__, __FUNCTION__);
$logger->logEvent('Test event 5', __FILE__, __LINE__, __FUNCTION__);
$logger->logEvent('Test event 6', __FILE__, __LINE__, __FUNCTION__);
// в этот момент логгер должен сохранить следующие 3 записи в файл tmp.log
