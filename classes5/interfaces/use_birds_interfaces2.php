<?php

require_once 'Duck.php';
require_once 'Swan.php';
require_once 'Fish.php';

/**
 * использование интерфейса в качестве типа входных данных
 * @param CanSwim $bird
 */
function swim(CanSwim $bird ) {
    // поскольку $bird реализует интерфейс CanSwim, мы точно знаем что у него есть метод swim()
    $bird->swim();
}

swim( new Duck() );
swim( new Swan() );
swim( new Fish() );
