<?php
    /*
     * using pointer:
     * - fopen
     * - fwrite
     * - fclose
     * - fgets
     * - fread 
     * - fseek
     * - flock
     */
    $fh = fopen("testfile.txt", 'w') or die("Failed to create fike");
    $text = <<< _END
    Line 1
    Line 2
    Line 3
    _END;
    fwrite($fh, $text) or die("Could not write to file");
    fclose($fh);
    echo "File 'testfile.txt' written successfully";
?>