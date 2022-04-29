<?php

require_once 'LoggerInterface.php';

abstract class Logger implements LoggerInterface
{
    protected int $type; // тип логера

    public function __construct(int $type)
    {
        $this->type = $type;
    }

    public function getType(): int
    {
        return $this->type;
    }
}
