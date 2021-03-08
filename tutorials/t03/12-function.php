<?php
    function longdate_scope($timestamp) {
        //$temp = date("l F jS Y", $timestamp);
        //return "The date is $temp";
        return date("l F jS Y", $timestamp);
    }

    function longdate_argument($text, $timestamp) {
        return $text . date("l F jS Y", $timestamp);
    }
    
    $temp = "The date is ";
    echo $temp . longdate_scope(time()) . "<br>";
    echo $temp . longdate_scope(time() - 17 * 24 * 60 * 60) . "<br><br>";
    echo longdate_argument($temp, time()) . "<br>";
    echo longdate_argument($temp, time() - 17 * 24 * 60 * 60);
?>