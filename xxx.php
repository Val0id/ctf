<?php
$dir = "/";
$files = scandir($dir);

foreach($files as $file) {
    $file_path = $dir . $file;
    if(is_file($file_path)) {
        $perms = substr(sprintf('%o', fileperms($file_path)), -4);
        $owner = fileowner($file_path);
        $size = filesize($file_path);

        echo "$perms $owner $size $file\n";
    }
}
?>
