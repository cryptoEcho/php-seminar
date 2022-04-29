<?php

require_once 'BaseClass.php';

class ExtClass extends BaseClass
{
    public function testAccess()
    {
        echo "public var: ".$this->publicVar.PHP_EOL;
        echo "protected var: ".$this->protectedVar.PHP_EOL;
        echo "private var: ".$this->privateVar.PHP_EOL; // недоступно, есть только в базовом класса
    }

    public function callProtectedMethods()
    {
        $this->protectedMethod(); // вызов разрешен, это protected method
        $this->privateMethod(); // вызов запрещен, это private method базового класса
    }

}
