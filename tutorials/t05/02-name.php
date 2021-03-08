<?php
    function fix_names($n1, $n2, $n3) {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        return $n1 . " " . $n2 . " " . $n3;
    }
    echo fix_names("WILLIAM", "henry", "gatES") . "<br>";
    
    function fix_names_array($n1, $n2, $n3) {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        return array($n1, $n2, $n3);
    }
    $names = fix_names_array("WILLIAM", "henry", "gatES");
    echo $names[0] . " " . $names[1] . " " . $names[2] . "<br>";

    $a1 = "WILLIAM";
    $a2 = "henry";
    $a3 = "gatES";
    function fix_names_reference(&$n1, &$n2, &$n3) {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
    }
    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    fix_names_reference($a1, $a2, $a3);
    echo $a1 . " " . $a2 . " " . $a3 . "<br>";

    function fix_names_global() {
        global $a1; $a1 = ucfirst(strtolower($a1));
        global $a2; $a2 = ucfirst(strtolower($a2));
        global $a3; $a3 = ucfirst(strtolower($a3));
    }
    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    fix_names_reference($a1, $a2, $a3);
    echo $a1 . " " . $a2 . " " . $a3;
?>