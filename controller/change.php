<?php
$id=(int)$_POST['id'];
$p=(int)$_POST['p'];
if(isset($_POST['id'])){
$f=file('txt.txt');

array_splice($f, $id, 1);
array_splice($_POST,-1);
array_splice($f,$id, 0, implode(',',$_POST)."\n");
file_put_contents('txt.txt', $f);
}
header("Location: /?page=$p");
?>