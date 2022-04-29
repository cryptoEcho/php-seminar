<?php

class BaseClass
{
    public string $publicVar = 'Значение public переменной';
    protected string $protectedVar = 'Значение protected переменной';
    private string $privateVar = 'Значение private переменной';

    public function printClassVars()
    {
        echo __CLASS__."::".__FUNCTION__." распечатает все свойства класса".PHP_EOL;
        var_dump(get_class_vars(self::class) ); // покажем все свойства объекта
    }

    /**
     * распечатка всех видимых нестатических свойств объекта
     */
    public function printObjectVars()
    {
        echo __CLASS__."::".__FUNCTION__." распечатает все свойства объекта: ".PHP_EOL;
        var_dump(get_object_vars($this) ); // покажем все свойства объекта
    }

    /**
     * private метод, доступ из производных классов запрещен
     */
    private function privateMethod()
    {
        echo "Внутри private метода ".__METHOD__.PHP_EOL;
    }

    /**
     * protected метод, сохраняется доступ из производных классов
     */
    protected function protectedMethod()
    {
        echo "Внутри protected метода ".__METHOD__.PHP_EOL;
    }

    /**
     * final метод, переопределение в производных классах запрещено
     */
    public final function finalMethod()
    {
        echo "Внутри final метода ".__METHOD__.PHP_EOL;
    }

}
