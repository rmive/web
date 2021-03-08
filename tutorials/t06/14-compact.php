<?php
    $fname         = "Doctor";
    $sname         = "Who";
    $planet        = "Gallifrey";
    $system        = "Gridlock";
    $constellation = "Kasterborous";
    // create an array from variables and their values
    $contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
    print_r($contact);
    echo "<br>";

    $j       = 23;
    $temp    = "Hello";
    $address = "1 Old Street";
    $age     = 61;
    print_r(compact(explode(' ', 'j temp address age')));
?>