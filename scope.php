<?php

class SomeClass {
    public $a;

    public function __construct($a)
    {
        $this->a = $a;
    }
}

function swap (SomeClass $a, $b = null) {
    $a = $b;
}

$a = new SomeClass(3);
$b = new SomeClass(5);

swap($a, $b);
echo $a->a; // ?

swap($a);
echo $a->a; // ?
