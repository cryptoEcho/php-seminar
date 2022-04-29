<?php

require_once 'Bird.php';
require_once 'CanSwim.php';

class Swan extends Bird implements CanSwim
{
    public function __construct()
    {
        $this->name = 'Swan';
    }
    public function swim()
    {
        echo $this->name." swim".PHP_EOL;
    }
}
