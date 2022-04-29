<?php
trait A {
    public function smallTalk() {
        echo 'a'.PHP_EOL;
    }
    public function bigTalk() {
        echo 'A'.PHP_EOL;
    }
}

trait B {
    public function smallTalk() {
        echo 'b'.PHP_EOL;
    }
    public function bigTalk() {
        echo 'B'.PHP_EOL;
    }
    public function BBB() {
        echo __METHOD__.': BBB'.PHP_EOL;
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
    public function BBB() {
        echo __METHOD__.": TalkerBBB".PHP_EOL;
    }
}

$talker = new Talker();
$talker->smallTalk();
$talker->bigTalk();
$talker->talk();
$talker->BBB();
