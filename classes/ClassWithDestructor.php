<?php

class ClassWithDestructor
{
    public function __construct()
    {
        echo "object of class ".__CLASS__." is created".PHP_EOL;
    }

    public function __destruct()
    {
        echo "object of class ".__CLASS__." is destroyed".PHP_EOL;
    }
}
