<?php

$myfile = fopen("/flag_341512514123213213", "r") or die("Unable to open file!");
echo fread($myfile,filesize("/flag_341512514123213213"));
fclose($myfile);
?>
