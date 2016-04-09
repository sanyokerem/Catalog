<?php 
function cleanDir($dir) {
    $files = glob($dir."/*");
    $c = count($files);
    if (count($files) > 0) {
        foreach ($files as $file) {      
            if (file_exists($file)) {
            unlink($file);
            }   
        }
    }
}

$f=fopen('txt.txt', 'w');
fwrite($f, '');
fclose($f);
cleanDir('images');
header('Location:/');
 ?>