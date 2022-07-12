<!DOCTYPE html>
<html>
<body>
<?php foreach ($artikel->result() as $item): ?>
		<div class="list-group">
			
				<h4><?= $item->RUT_CLIENTE ?></h4>
				<p ><?= $item->COD_USUARIO ?></p>
		</div>
	<?php endforeach ?>
</body>
</html>