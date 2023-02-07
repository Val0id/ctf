<?php
print_r(scandir("/"));
$dir = "/";
$files = scandir($dir);

foreach($files as $file) {
    $file_path = $dir . "/" . $file;
    if(is_file($file_path)) {
        if(is_readable($file_path)) {
            echo "$file is readable\n";
        } else {
            echo "$file is not readable\n";
        }
    }
}
?>
