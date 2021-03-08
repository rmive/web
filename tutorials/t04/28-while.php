<?php
    $fuel = 10;
    while ($fuel > 1) {
        // Keep driving ...
        echo "Thres is enouth fuel<br>";
        $fuel -= 3;
    }
    echo "<br>";

    $count = 1;
    while ($count <= 12) {
        echo "$count times 12 is " . $count * 12 . "<br>";
        ++ $count;
    }
    echo "<br>";

    $count = 0;
    while (++ $count <= 12) {
        echo "$count times 12 is " . $count * 12 . "<br>";
    }
?>