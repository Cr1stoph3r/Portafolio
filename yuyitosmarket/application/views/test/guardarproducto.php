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
    echo form_label('cod producto', 'cod_producto');

    $input = array (
        'name' => 'cod_producto',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    

    echo form_input($input);
    ?>
    </div>

    <div class="form-group">
    <?php
    echo form_label('nombre producto', 'nombre_producto');

    $input = array (
        'name' => 'nombre_producto',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    echo form_input($input);
    ?>
    </div>

    <div class="form-group">
    <?php
    echo form_label('Precio unidad', 'precio_unidad');

    $input = array (
        'name' => 'precio_unidad',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    echo form_input($input);
    ?>
    </div>

    <div class="form-group">
    <?php
    echo form_label('stock', 'stock');

    $input = array (
        'name' => 'stock',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    echo form_input($input);
    ?>
    </div>

    <div class="form-group">
    <?php
    echo form_label('caducidad', 'caducidad');

    $input = array (
        'name' => 'caducidad',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    echo form_input($input);
    ?>
    </div>

    <div class="form-group">
    <?php
    echo form_label('tipo producto', 'tipo_producto');

    $input = array (
        'name' => 'tipo_producto',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    echo form_input($input);
    ?>
    </div>        

    <div class="form-group">
    <?php
    echo form_label('perecibilidad', 'perecibilidad');

    $input = array (
        'name' => 'perecibilidad',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    echo form_input($input);
    ?>
    </div>  

    <div class="form-group">
    <?php
    echo form_label('estado', 'estado');

    $input = array (
        'name' => 'estado',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    echo form_input($input);
    ?>
    </div>  

    <div class="form-group">
    <?php
    echo form_label('stock pendiente', 'stock_pendiente');

    $input = array (
        'name' => 'stock_pendiente',
        'value' => '',
        'class' => 'form-control input-lg',
    );

    echo form_input($input);
    ?>
    </div>  

    <div class="form-group">
    <?php
    echo form_label('cod marca', 'cod_marca');

    $input = array (
        'name' => 'cod_marca',
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