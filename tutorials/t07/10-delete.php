<?php
    if (unlink('testfile2.new')) {
        echo "File 'testfile.new' successfully deleted";
    } else {
        echo "Could not delete file";
    }
?>