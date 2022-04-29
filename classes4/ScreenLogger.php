<?php

require_once 'Logger.php';

class ScreenLogger extends Logger
{
    public function __construct()
    {
//        echo 'inside '.__METHOD__.PHP_EOL;
        parent::__construct(Logger::TYPE_SCREEN);
    }

    protected function saveLogEvent()
    {
        $logRecordTxt = $this->getLogTextVerbose();
        echo $logRecordTxt.PHP_EOL;
    }
}

