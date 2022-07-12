<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>

            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors();?>
                </div>
            <?php } ?>
            
            <form method="POST" action="<?php echo base_url(); ?>/clientes/actualizar" autocomplete="off">
           

            <input type="hidden" id="id" name="id" value="<?php echo $cliente['id']; ?>" />

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Rut cliente</label>
                        <input class="form-control" id="rut_cliente" name="rut_cliente" type="text" value="<?php
                         echo $cliente['rut_cliente']; ?>"
                        autofocus required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Cod usuario</label>
                        <input class="form-control" id="cod_usuario" name="cod_usuario" type="text" value="<?php
                         echo $cliente['cod_usuario']; ?>"
                        required />
                    </div>
                </div>
            </div>

            <a href="<?php echo base_url(); ?>/clientes" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </main>