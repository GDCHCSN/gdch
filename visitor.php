<?php
    $file = fopen("con.txt", "r");
    $num = (int)fread($file, filesize("con.txt"));
    $num += 1;
    fclose($file);
    $file = fopen("con.txt", "w");
    fwrite($file, (string)$num);
    fclose($file)
?>
