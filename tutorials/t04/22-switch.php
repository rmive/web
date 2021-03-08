<?php
    $page = "";
    if     ($page == "Home")  echo "You selected Home";
    elseif ($page == "About") echo "You selected About";
    elseif ($page == "News")  echo "You selected News";
    elseif ($page == "Login") echo "You selected Login";
    elseif ($page == "Links") echo "You selected Links";
    echo "<br>";

    switch ($page) {
        case "Home":
            echo "You selected Home";
            break;
        case "About":
            echo "You selected About";
            break;
        case "News":
            echo "You selected News";
            break;
        case "Login":
            echo "You selected Login";
            break;
        case "Links":
            echo "You selected Links";
            break;
        default:
            echo "Unrecognized selection";
            break; 
    }
    echo "<br>";

    switch ($page):
        case "Home":
            echo "You selected Home";
            break;
        case "About":
            echo "You selected About";
            break;
        case "News":
            echo "You selected News";
            break;
        case "Login":
            echo "You selected Login";
            break;
        case "Links":
            echo "You selected Links";
            break;
        default:
            echo "Unrecognized selection";
            break; 
    endswitch;
?>