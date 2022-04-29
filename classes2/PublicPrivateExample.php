<?php

class PublicPrivateExample
{
    public int $a = 0;
    private int $b = 0;

    private const PRIVATE_CONST = 'Приватная константа';
    public const PUBLIC_CONST = 'Публичная константа';

    public function printAB()
    {
        // из метода класса, есть доступ как public, так и к private свойствам
        echo "a = ".$this->a.", b = ".$this->b.PHP_EOL;
    }

    public function setB( int $b )
    {
        $this->b = $b;
    }

    public function getB(): int
    {
        return $this->b;
    }

    private function privateFunction()
    {
        echo 'Вызов приватного метода'.PHP_EOL;
//        echo 'Доступ к приватной '
    }

    public function accessPrivateConstantAndMethod()
    {
        $this->privateFunction();
        echo 'Доступ к приватной константе: '.self::PRIVATE_CONST.PHP_EOL;
        echo 'Доступ к приватной константе2: '.PublicPrivateExample::PRIVATE_CONST;
    }
}

