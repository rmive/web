<?php
    $paper = array('copier' => "Copier & Multipurpose",
                   'inkjet' => "Inkjet Printer",
                   'laser'  => "Laser Printer",
                   'photo'  => "Photographic Paper");
    do {
        echo key($paper) . ": " . current($paper) . "<br>";
    } while (next($paper));
?>