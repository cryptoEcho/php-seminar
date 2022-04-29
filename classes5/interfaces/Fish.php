<?php

/**
 * Class Fish
 * реализует интерфейсы CanSwim, поэтому метод swim() должен быть определен
 */
class Fish implements CanSwim
{
    /**
     * swim - реализация метода интерфейса CanSwim
     */
    public function swim()
    {
        echo "Fish swim".PHP_EOL;
    }
}
