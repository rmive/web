<?php
    function getnext() {
        echo "executed";
        return 1;
    }

    $finished = 1;
    if ($finished == 1 OR getnext() == 1) {}
    echo "<br>";
    $gn = getnext();
    if ($finished == 1 OR $gn == 1) {}
?>