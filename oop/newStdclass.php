<?php

declare(strict_types = 1);

class SimpleClass {

    public $var = 'default';

    public function displayVar(): void {
        echo $this->var;
    }
};


class ComplexNumber {
    
    public function __construct(float $real, float $imaginary) {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }

    public function __destruct() {

    }

    // public float $real;
    // public float $imaginary;

    function add(float $real, float $imaginary) {
        $this->real += $real;
        $this->imaginary += $imaginary;
    }
};


$a = new SimpleClass(32, 1);
$b = new SimpleClass;
var_dump($a);
$a->displayVar();

echo "\nBye!\n";