<?php 
if (isset($_FILES['img'])) {
	if ( $_FILES['img']['error'] === 0 ) {
		if (!is_dir('images')) {
			mkdir('images');
		}
		$f = tempnam('images', 'img');
		 move_uploaded_file($_FILES['img']['tmp_name'], $f);
	}
}

$file=fopen('txt.txt','a');

	if(isset($_POST["img_name"]) && isset($_POST['description'])){
		fputcsv($file, [$_POST["img_name"],$_POST['description'],'images/'.basename($f),$_POST['category']]);
	}
header("Location: /");
 ?>

