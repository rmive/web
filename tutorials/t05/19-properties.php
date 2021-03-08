<?php
    class User {}

    $object1 = new User;
    $object1->name = "Alice";
    echo $object1->name;

    class Test {
        public $name = "Paul Smith";
        public $age = 42;
        public $time = time();  // Invalid - calls a function
        public $score = $level * 2;  // Invalid - uses an expression
    }


?>