<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <br>
    <?php echo form_open(''); ?>

    <div class="form-group">
    <?php
    echo form_label('Rut cliente', 'rut_cliente');

    $input = array (
        'name' => 'rut_cliente',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    echo form_input($input);
    ?>
    </div>

    <div class="form-group">
    <?php
    echo form_label('id persona', 'id_persona');

    $input = array (
        'name' => 'id_persona',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    echo form_input($input);
    ?>
    </div>
    <br>

    <?php 
    echo form_submit('mysubmit', 'Enviar', "class='btn btn-primary'");
    ?>

    <?php echo form_close(''); ?>
    </div>
</body>
</html>