<?php

class ThisExample
{
    public int $a;

    public function setA(int $newAvalue) {
        $this->a = $newAvalue; // доступ к свойству объекта через this
    }

    public function printA() {
        echo "[a] value is ".$this->a.PHP_EOL; // доступ к свойству объекта через this
    }

    public static function aStaticMethod() {
        echo "[a] value is ".$this->a.PHP_EOL; // ошибка, this недоступен
    }

    public function printThis() {
        echo "This object is ".var_export($this).PHP_EOL; // доступ к свойству объекта через this
    }

}
