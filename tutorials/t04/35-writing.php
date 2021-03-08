<?php
    exec("echo '' > text.txt");

    $fp = fopen("text.txt", "wb");
    for ($j = 0; $j < 10; $j ++) {
        $written = fwrite($fp, "data<br>");
        if ($written == FALSE) break;
    }
    fclose($fp);
    
    $output = exec("cat text.txt");
    echo $output;
    exec("rm text.txt");
?>