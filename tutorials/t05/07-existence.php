<?php
    if (function_exists("array_combine")) {
        echo "Function exists";
    } else {
        echo "Function does not exist - better write our own";
    }
    echo "<br>";
    echo phpversion();
?>