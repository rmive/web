<?php
    $fh = fopen("testfile.txt", 'r') or die("File does not exist or you lack permission to open it");
    // grab a whole line
    $line = fgets($fh);
    fclose($fh);
    echo $line . "<br>";

    $fh = fopen("testfile.txt", 'r') or die("File does not exist or you lack permission to open it");
    // retrieve multiple lines or portions of lines
    $text = fread($fh, 3);
    fclose($fh);
    echo $text;
?>