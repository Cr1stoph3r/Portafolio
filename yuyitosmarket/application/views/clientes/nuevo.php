<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h4 class="mt-4">Registrar clientes</h4>
           
            
            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors();?>
                </div>
            <?php } ?>
            
            <form method="POST" action="<?php echo base_url(); ?>clientes/insertar" autocomplete="off">
            
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Rut cliente</label>
                        <input class="form-control" id="rut_cliente" name="rut_cliente" type="text"
                        autofocus required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Nombre</label>
                        <input class="form-control" id="nombre" name="nombre" type="text" required />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Apellidos</label>
                        <input class="form-control" id="apellidos" name="apellidos" type="text"
                        required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Dirección</label>
                        <input class="form-control" id="direccion" name="direccion" type="text" required />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Telefono</label>
                        <input class="form-control" id="telefono" name="telefono" type="text"
                        required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">correo</label>
                        <input class="form-control" id="correo" name="correo" type="text" required />
                    </div>
                </div>
            </div>
                

            <br>
            <br>
            
            

            <a href="<?php echo base_url(); ?>clientes" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success" id="guardar">Guardar</button>


            </form>
        </div>
    </main>