<?php
    $month = 9;
    $day = 31;
    $year = 2018;
    if (checkdate($month, $day, $year)) {
        echo "Date is valid";
    } else {
        echo "Date is invalid";
    }
?>