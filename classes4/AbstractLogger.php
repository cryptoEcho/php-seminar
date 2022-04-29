<?php

abstract class AbstractLogger
{
    protected int $type; // тип логера
    protected array $logRecord; // информация о текущей записи

    const TYPE_SCREEN = 1;
    const TYPE_FILE = 2;
    const TYPE_DB = 3;

    /**
     * Logger constructor.
     * @param int $type
     */
    public function __construct(int $type )
    {
//        echo 'inside '.__METHOD__.PHP_EOL;
        $this->type = $type;
    }

    /**
     * Залогировать событие
     * @param string $message - сообение
     * @param string $file - файл, где быловызвано событие
     * @param int $line - строка файла
     * @param string $function - функция/метод
     */
    public function logEvent(string $message, string $file, int $line, string $function )
    {
        $this->prepareLogRecord($message, $file, $line, $function);
        $this->saveLogEvent();
    }

    /**
     * Вернет тип логгера
     * @return int - тип
     */
    public function getType(): int
    {
        return $this->type;
    }

    protected function getLogRecord(): ?array
    {
        return $this->logRecord;
    }

    private final function prepareLogRecord( $message, $file, $line, $function )
    {
        $this->logRecord= [
            'message' => $message,
            'file' => $file,
            'line' => $line,
            'function' => $function,
            'user' => 1,
            'date' => date('d.m.Y H:m:s', time())
        ];
    }

    /**
     * сохранить информацию в лог - должно быть перегружено в производных классах
     */
    abstract protected function saveLogEvent();

    /**
     * информация о текущей записи лога в текстовой форме
     */
    protected function getLogTextVerbose()
    {
        $lr = $this->getLogRecord();
        return "LOG type(".$this->getType().") [".$lr['date']."]: ".$lr['message']." at ".$lr['file']." line ".$lr['line'].PHP_EOL;
    }

}
