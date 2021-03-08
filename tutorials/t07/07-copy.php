<?php
    /*
     * using filename:
     * - copy
     * - rename
     * - unlink
     * - file_get_contents
     */
    copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
    echo "File successfully copied to 'testfile2.txt'";

    if (!copy('testfile.txt', 'testfile2.txt')) echo "Could not copy file";
    else echo "File successfully copied to 'testfile2.txt'";
?>