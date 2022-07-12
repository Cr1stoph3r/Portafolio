<!DOCTYPE html>
<html>
<body>
<?php foreach ($artikel->result() as $item): ?>
		<div class="list-group">
			
				<h4><?= $item->ID_DEUDA ?></h4>
				<p ><?= $item->FECHA_FIADO ?></p>
				<p ><?= $item->FECHA_LIMITE ?></p>
				<p ><?= $item->ABONADO ?></p>
				<p ><?= $item->DEUDA_PENDIENTE ?></p>
				<p ><?= $item->REALIZADO ?></p>
				<p ><?= $item->RUT_CLIENTE ?></p>
		</div>
	<?php endforeach ?>
</body>
</html>