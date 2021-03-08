<?php
    // numeric array
    $paper = array("Copier", "Inkjet", "Laser", "Photo");
    $j = 0;
    foreach ($paper as $item) {
        echo "$j: $item<br>";
        $j ++;
    }

    // associative array
    $paper = array('copier' => "Copier & Multipurpose",
                   'inkjet' => "Inkjet Printer",
                   'laser'  => "Laser Printer",
                   'photo'  => "Photographic Paper");
    foreach ($paper as $item => $description) {
        echo "$item: $description<br>";
    }
?>