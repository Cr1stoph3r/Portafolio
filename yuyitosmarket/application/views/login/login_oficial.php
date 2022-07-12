<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container">
<div class="row">
<form method="POST" action="<?php echo base_url(); ?>login/validar" autocomplete="off">
    <input type="text" name="usuario" placeholder="usuario">
    <input type="text" name="contrasena" placeholder="contraseña">

    <button type="submit" id="login">LOGIN</button>
    <?php
				if($this->session->flashdata('error')){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?= $this->session->flashdata('error'); ?>
					</div>
					<?php
				}
			?>
</form>
    </div>
</div>
</body>
</html>


