<!DOCTYPE html>
<html>
<body>
<?php foreach ($artikel->result() as $item): ?>
		<div class="list-group">
			
				<h4><?= $item->COD_PRODUCTO ?></h4>
				<p ><?= $item->NOMBRE_PRODUCTO ?></p>
				<p ><?= $item->PRECIO_UNIDAD ?></p>
				<p ><?= $item->STOCK ?></p>
				<p ><?= $item->CADUCIDAD ?></p>
				<p ><?= $item->TIPO_PRODUCTO ?></p>
				<p ><?= $item->PERECIBILIDAD ?></p>
				<p ><?= $item->ESTADO ?></p>
				<p ><?= $item->STOCK_PENDIENTE ?></p>
				<p ><?= $item->COD_MARCA ?></p>
		</div>
	<?php endforeach ?>
</body>
</html>