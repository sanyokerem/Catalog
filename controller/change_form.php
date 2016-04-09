<?php include('..\header.html') ?>
<form action="change.php" method="POST" >
 	<legend>Правка записи</legend>
 		<div class="form-group">
 			<label for="img_name">Название:</label>
 			<input type="text" name="img_name" id="img_name" class="form-control" value="<?=$_GET['img_name']?>" autofocus>
 		</div>

		<div class="form-group">
 			<label for="desc">Описание:</label>
			<textarea type="text" name="description" id="desc" class="form-control"><?=$_GET['description']?></textarea>
		</div>

			<input type="hidden" name="img_path" id="path" value='<?=$_GET['img_path']?>'>

		<div class="form-group">
			<label for="category">Категория:</label>
 			<select name="category" class="form-control" id="category">
				<option <?=$_GET['type'] == 'Неизвестный' ?  'selected' :  null; ?>>Неизвестный</option>
				<option <?=$_GET['type'] == 'Природа' ?  'selected' :  null; ?>>Природа</option>
				<option <?=$_GET['type'] == 'Животные' ?  'selected' :  null; ?>>Животные</option>
				<option <?=$_GET['type'] == 'Живопись' ?  'selected' :  null; ?>>Живопись</option>
				<option <?=$_GET['type'] == 'Машины' ?  'selected' :  null; ?>>Машины</option>
			</select>
		</div>
			<input type="hidden" name="id" value='<?=$_GET['id']?>'>
			<input type="hidden" name="p" value='<?=$_GET['p']?>'>

 	<button type="submit" class="btn btn-primary">Подтвердить</button>
 </form>