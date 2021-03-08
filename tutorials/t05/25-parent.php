<?php
    class Dad {
        function test() {
            echo "[Class Dad] I am your Father<br>";
        }
    }

    class Son extends Dad {
        function test() {
            echo "[Class Son] I am Luke<br>";
        }

        function test2() {
            parent::test();
        }
    }

    $object = new Son;
    $object->test();
    $object->test2();
    echo "<br>";

    class Wildcat {
        public $fur;

        function __construct() {
            $this->fur = "TRUE";
        }
    }

    class Tiger extends Wildcat {
        public $stripes;

        function __construct() {
            parent::__construct();
            $this->stripes = "TRUE";
        }
    }

    $object = new Tiger();
    
    echo "Tigers have...<br>";
    echo "Fur: " . $object->fur . "<br>";
    echo "Stripes: " . $object->stripes;
?>