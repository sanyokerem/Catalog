<?php 
header('Content-type: image/jpeg');
readfile($_GET['img_path']);
