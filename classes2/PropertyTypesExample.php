<?php

require_once 'ComplexNumber.php';

class PropertyTypesExample
{
    public int $intVal;
    public ComplexNumber $complexNumberVal;

    public function setIntVal( int $intVal )
    {
        $this->intVal = $intVal;
    }

    public function setComplexNumberVal( ComplexNumber $complexnumberVal )
    {
        $this->complexNumberVal = $complexnumberVal;
    }

    public function getIntVal(): int
    {
        return $this->intVal;
    }

    public function getComplexNumberVal(): ComplexNumber
    {
        return $this->complexNumberVal;
    }
}
