<?php
    $count = 1;
    do 
        echo "$count times 12 is " . $count * 12 . "<br>";
    while (++ $count <= 12);
    echo "<br>";
    
    $count = 1;
    do {
        echo "$count times 12 is ";
        echo $count * 12;
        echo "<br>";
    }
    while (++ $count <= 12);
?>