<?php
    class User {
        public $name;
    }

    $object1 = new User();
    $object1->name = "Alice";
    $object2 = $object1;  // refer
    $object2->name = "Amy";
    echo "object1 name = " . $object1->name . "<br>";
    echo "object2 name = " . $object2->name . "<br>";

    $object1->name = "Alice";
    $object3 = clone $object1;
    $object3->name = "Amy";
    echo "object1 name = " . $object1->name . "<br>";
    echo "object3 name = " . $object3->name;

?>