<?php
    $fuel = 2;
    echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
    echo "<br>";

    $enough = $fuel <= 1 ? FALSE : TRUE;
    echo $enough;
?>