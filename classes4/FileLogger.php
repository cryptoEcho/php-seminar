<?php

require_once 'Logger.php';

class FileLogger extends Logger
{
    protected string $fileName;
    protected $fileHandler; // must be resource

    /**
     * FileLogger constructor.
     * откроет файл на запись
     * @param string $fileName - название файла лога
     */
    public function __construct(string $fileName )
    {
        if( !file_exists( $fileName ) ) {
            //throw exception
        }
        $this->fileName = $fileName;
        $this->openFileForLog();
//        echo 'inside '.__METHOD__.PHP_EOL;
        parent::__construct(Logger::TYPE_FILE);
    }

    protected function saveLogEvent()
    {
        $logRecordTxt = $this->getLogTextVerbose();
        // write to file
        fwrite($this->fileHandler, $logRecordTxt);
    }

    /**
     * Проверяет, что передан ресурс, и устанавливает значение свойства fileHandler
     * @param $fileHandler
     */
    protected function setFileHandler( $fileHandler )
    {
        if( !is_resource( $fileHandler ) ) {
            throw new TypeError('invalid argument, must be a resource for fileHandler');
        }
        $this->fileHandler = $fileHandler;
    }

    protected function openFileForLog()
    {
        $fileHandler = fopen( $this->fileName, 'a' );
        $this->setFileHandler($fileHandler);
    }

    /**
     * Деструктор класса
     * освободит файловый дескриптор
     */
    function __destruct()
    {
        // освободить ресурс
        fclose($this->fileHandler);
    }
}
