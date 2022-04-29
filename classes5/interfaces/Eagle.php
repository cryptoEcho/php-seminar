<?php

require_once 'Bird.php';
require_once 'CanFly.php';

/**
 * Class Eagle
 * расширяет базовый класс Bird (наследуем метод info())
 * реализует интерфейсы CanFly, поэтому метод fly() должен быть определен
 */
class Eagle extends Bird implements CanFly
{
    public function __construct()
    {
        $this->name = 'Eagle';
    }

    /**
     * fly - реализация метода интерфейса CanFly
     */
    public function fly()
    {
        echo $this->name.' fly'.PHP_EOL;
    }
}
