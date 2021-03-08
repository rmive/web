<?php
    if (rename('testfile2.txt', 'testfile2.new')) {
        echo "File successfully renamed to 'testfile2.new'";
    } else {
        echo "Could not rename file";
    }
?>