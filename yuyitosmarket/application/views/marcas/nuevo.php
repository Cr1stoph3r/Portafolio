<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h4 class="mt-4">Registrar Marcas</h4>
            
            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors();?>
                </div>
            <?php } ?>
            
            <form method="POST" action="<?php echo base_url(); ?>MarcasController/nuevo" autocomplete="off">
            
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Rut cliente</label>
                        <input class="form-control" id="rut_cliente" name="rut_cliente" type="text"
                        autofocus required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Cod usuario</label>
                        <input class="form-control" id="cod_usuario" name="cod_usuario" type="text" required />
                    </div>
                </div>
            </div>
                
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Rut proveedor</label>
                        <input class="form-control" id="rut_proveedor" name="rut_proveedor" type="text"
                        required/>
                    </div>
                </div>
            </div>
            <br>
            

            <a href="<?php echo base_url(); ?>marcas" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </main>