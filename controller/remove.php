<?php 
	if(isset($_GET['id'])){
		$f=file('txt.txt');
	array_splice($f, $_GET['id'], 1, null);
	file_put_contents('txt.txt', $f);
	if(file_exists($_GET['img_path'])){
		unlink($_GET['img_path']);
	}
}

header("Location: /");
 ?>