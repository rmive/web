<?php
    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";
    print_r($paper);
    echo "<br>";

    $paper = array();
    $paper[0] = "Copier";
    $paper[1] = "Inkjet";
    $paper[2] = "Laser";
    $paper[3] = "Photo";
    print_r($paper);
    echo "<br>";
    for ($j = 0; $j < 4; $j ++) {
        echo "$j: $paper[$j]<br>";
    }
?>
