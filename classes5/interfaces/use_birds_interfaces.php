<?php

require_once 'Eagle.php';
require_once 'Duck.php';

/**
 * a simple function to describe a bird
 */
function describe( Bird $bird ) {
    if ($bird instanceof Bird) {
        // раз $bird экземпляр Bird или производного от Bird, у него точно есть метод info()
        $bird->info();
        if ($bird instanceof CanFly) {
            // раз $bird реализует CanFly, у него точно есть метод fly()
            $bird->fly();
        }
        if ($bird instanceof CanSwim) {
            // раз $bird реализует CanSwim, у него точно есть метод swim()
            $bird->swim();
        }
    } else {
        die("This is not a bird. I cannot describe it.");
    }
}

describe( new Eagle() );
describe( new Duck() );
