<?php

require_once 'AbstractLogger.php';

class NewScreenLogger extends AbstractLogger
{
    public function __construct()
    {
//        echo 'inside '.__METHOD__.PHP_EOL;
        parent::__construct(AbstractLogger::TYPE_SCREEN);
    }

    protected function saveLogEvent()
    {
        $logRecordTxt = $this->getLogTextVerbose();
        echo $logRecordTxt.PHP_EOL;
    }
}

