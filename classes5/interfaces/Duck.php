<?php

require_once 'Bird.php';
require_once 'CanFly.php';
require_once 'CanSwim.php';

/**
 * Class Duck
 * расширяет базовый класс Bird (наследуем метод info())
 * реализует интерфейсы CanFly, CanSwim, поэтому методы fly() и swim() должны быть определены
 */
class Duck extends Bird implements CanFly, CanSwim
{
    public function __construct()
    {
        $this->name = 'Duck';
    }

    /**
     * fly - реализация метода интерфейса CanFly
     */
    public function fly()
    {
        echo $this->name." fly".PHP_EOL;
    }

    /**
     * swim - реализация метода интерфейса CanSwim
     */
    public function swim()
    {
        echo $this->name." swim".PHP_EOL;
    }
}
