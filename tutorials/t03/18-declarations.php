<?php
    static $int = 0;         // Allowed
    static $ss = 1 + 2;     // Disallowed (will produce a Parse error)
    static $int = sqrt(144); // Disallowed
?>