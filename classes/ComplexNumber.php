<?php

class ComplexNumber
{
    public float $real; // Действительная часть числа
    public float $imaginary; // Мнимая часть числа

    /**
     * ComplexNumber constructor.
     * @param float $real Действительная часть числа
     * @param float $imaginary Мнимая часть числа
     */
    public function __construct(float $real, float $imaginary)
    {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }

    /**
     * Метод: добавить число к текущему значению. Число задается своей действительной и мнимой частью
     * @param float $real - действительная часть для добавления
     * @param float $imaginary- мнимая часть для добавления
     */
    function add(float $real, float $imaginary)
    {
        $this->real += $real;
        $this->imaginary += $imaginary;
    }

    /**
     * Метод: добавить число к текущему значению. Число типа ComplexNumber
     * @param ComplexNumber $complexNumber - число, которое нужно прибавить
     */
    function addComplex(ComplexNumber $complexNumber ) {
        $this->real += $complexNumber->real;
        $this->imaginary += $complexNumber->imaginary;
    }

    static function addition( ComplexNumber $CN1, ComplexNumber $CN2 ): ComplexNumber
    {
        return new ComplexNumber( $CN1->real+$CN2->real, $CN1->imaginary + $CN2->imaginary );
    }

}
