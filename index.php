<?php include('header.html') ?>
	<?php
			$f=fopen('controller/txt.txt','r');
			rewind($f);
			$item=[];
			while($item=fgetcsv($f)){
				$items[]=$item;
			}
			if(isset($_GET['category']) && $_GET['category']!='reset'){
				$items=array_filter($items, function($item){
					static $i=0;
					$i++;
				if($item[3]==$_GET['category']) return True;
			});
			}
		if(isset($_GET['sort'])){
				sort($items);
			}
	 const MAX=5;
	 $page= isset($_GET['page']) && (int)$_GET['page'] > 0 ? (int)$_GET['page'] : 1;
	 $offset = ($page - 1) * MAX;
	 $max_page = ceil((count($items)/MAX));
	 $sub_items=isset($items) ? array_slice($items, $offset, MAX, true): null;
	 // var_export($sub_items);
	?>
	<table class="table table-condensed table-bordered table-hover table-striped table-responsive">
		<tr>
			<th>Картинка</th>
			<th>Название</th>
			<th>Описание</th>
			<th><a href="?category=reset">Категория</a></th>
			<th>Удаление</th>
			<th>Изменение</th>
			<th>Скачать</th>

		</tr>
		<?php if(!isset($items)){
			$items=null;
		}
			else{
				foreach ($sub_items as $key=>$item):?>
			<tr>
				<td class="img">
					<a href='controller/openImg.php?img_name=images/<?=basename($item[2])?>'><img src='controller/images/<?=basename($item[2])?>'></a>
				</td>
				<td><?=$item[0]?></td>
				<td><?=$item[1]?></td>
				<td><a href="?category=<?=$item[3]?>"><?=$item[3]?></a></td>
				<td><a href="controller/remove.php?id= <?= $key?>&img_path=images/<?=basename($item[2])?>">REMOVE</a></td>
				<td><a href="controller/change_form.php?id=<?= $key?>&img_name=<?=$item[0]?>&description=<?=$item[1]?>&type=<?=$item[3]?>&img_path=images/<?=basename($item[2])?>&page=<?=$page?>" >CHANGE</a></td>
				<td><a href='controller/images/<?=basename($a[2])?>'>DOWNLOAD</a></td>
			</tr>
		<?php endforeach;
		} ?>
		</table>
		<a href="adder.php" class="btn btn-default">Adder</a>
		<ul class="pagination">
			<?php if($page>1): ?>
				<li><a href="?page=<?= $page-1?><?= isset($_GET['category']) ? '&category='.$_GET['category'] : null;?>">&laquo;</a></li>
			<?php endif; ?>
				<?php for ($i=1; $i <= $max_page ; $i++):?>
				<li class="<?php if($i === $page) echo 'active' ?>"><a href="?page=<?= $i?><?= isset($_GET['category']) ? '&category='.$_GET['category'] : null;?>"><?= $i ?></a></li>
				<?php endfor;?>
				<?php if ($page < $max_page /*&& $page!=$max_page*/): ?>
				<li><a href="?page=<?= $page+1?><?= isset($_GET['category']) ? '&category='.$_GET['category'] : null;?>">&raquo;</a></li>
			<?php endif; ?>
		</ul>
<?php include('footer.html') ?>
