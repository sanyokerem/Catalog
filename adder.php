<?php include('header.html') ?>
			
			
	
		<form action="controller\save.php" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">
			<legend>Новая запись</legend>
				
			<div class="form-group">
				<label for="inputImg_name" class="col-sm-2 control-label">Название:</label>
				<div class="col-sm-10">
					<input type="text" name="img_name" id="inputImg_name" class="form-control" value="" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="textareaDescription" class="col-sm-2 control-label">Описание:</label>
				<div class="col-sm-10">
					<textarea name="description" id="textareaDescription" class="form-control" rows="5"></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="inputFile">Файл:</label>
				<input type="file" name="img" id="inputFile" required>
			</div>
			
			<div class="form-group">
				<label for="category">Категория:</label>
				<select name="category" class="form-control" id="category">
					<option >Неизвестный</option>
					<option >Природа</option>
					<option >Животные</option>
					<option >Живопись</option>
					<option >Машины</option>
				</select>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<hr>
		<form action="controller\clear.php">
			<button type="submit" class="btn btn-primary" name='clear'>Clear</button>
		</form>
		<br>
		<a href="/" class="btn btn-default">Main</a>
		<?php include('footer.html') ?>