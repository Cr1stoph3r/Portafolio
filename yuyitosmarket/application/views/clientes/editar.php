<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>

            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors();?>
                </div>
            <?php } ?>
            
            <form method="POST" action="<?php echo base_url(); ?>clientes/editarCliente"  autocomplete="off">

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Nombre</label>
                        <input class="form-control" id="nombre" name="nombre" type="text" value="<?=
                         $datos->NOMBRE;  ?>"
                        autofocus required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Apellidos</label>
                        <input class="form-control" id="apellidos" name="apellidos" type="text" value="<?=
                         $datos->APELLIDOS;  ?>"
                        required />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Direccion</label>
                        <input class="form-control" id="direccion" name="direccion" type="text" value="<?=
                         $datos->DIRECCION;  ?>"
                        required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Telefono</label>
                        <input class="form-control" id="telefono" name="telefono" type="text" value="<?=
                        $datos->TELEFONO;  ?>"
                        required />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Correo</label>
                        <input class="form-control" id="correo" name="correo" type="text" value="<?=
                         $datos->CORREO;  ?>"
                        required/>
                    </div>
                </div>
            </div>

            <a href="<?php echo base_url(); ?>/clientes" class="btn btn-primary">Regresar</a>
            <form method="POST" action="<?php echo base_url(); ?>clientes/eliminadosActivar" autocomplete="off"><input type="hidden" id="id" name="id" value="<?= $datos->RUT_CLIENTE; ?>" /><button type="submit" class="btn btn-danger btn-ok" id="guardar">Guardar</button></form>


            </form>
        </div>
    </main>
