<?php

abstract class Bird
{
    protected string $name;

    public function info() {
        echo "I am a {$this->name}".PHP_EOL;
        echo "I am an bird".PHP_EOL;
    }
}
