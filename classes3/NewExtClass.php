<?php

require_once 'BaseClass.php';

class NewExtClass extends BaseClass
{
    /**
     * переопределенный метод базового класса
     * распечатает все свойства объекта, доступные в NewExtClass
     */
    public function printObjectVars()
    {
        echo __METHOD__." распечатает все свойства объекта: ".PHP_EOL;
        var_dump(get_object_vars($this) ); // покажем все свойства объекта
    }

    /**
     * вызов метода базового класса
     * переопределенного в производном
     */
    public function printParentObjectVars()
    {
        parent::printObjectVars();
    }

//    /**
//     * ошибка - нельзя переопределять метод, объявленный как final
//     */
//    public function finalMethod()
//    {
//        echo "Внутри final метода производного класса ".__CLASS__."::".__FUNCTION__.PHP_EOL;
//    }
}
