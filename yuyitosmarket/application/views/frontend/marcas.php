<!DOCTYPE html>
<html>
<body>
<?php foreach ($artikel->result() as $item): ?>
		<div class="list-group">
			
				<h4><?= $item->COD_MARCA ?></h4>
				<p ><?= $item->MARCA ?></p>
				<p ><?= $item->RUT_PROVEEDOR ?></p>

		</div>
	<?php endforeach ?>
</body>
</html>