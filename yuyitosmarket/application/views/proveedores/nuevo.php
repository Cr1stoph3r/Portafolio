<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h4 class="mt-4">Registrar proveedor</h4>
            
            
            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors();?>
                </div>
            <?php } ?>
            
            <form method="POST" action="<?php echo base_url(); ?>/proveedores/insertar" autocomplete="off">
            
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Rut proveedor</label>
                        <input class="form-control" id="rut_proveedor" name="rut_proveedor" type="text"
                        autofocus required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Nombre proveedor</label>
                        <input class="form-control" id="nombre_proveedor" name="nombre_proveedor" type="text" required />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Apellido materno</label>
                        <input class="form-control" id="apellido_materno" name="apellido_materno" type="text"
                        required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Apellido paterno</label>
                        <input class="form-control" id="apellido_parterno" name="apellido_parterno" type="text" required />
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Edad</label>
                        <input class="form-control" id="edad" name="edad" type="text"
                        required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Nacionalidad</label>
                        <input class="form-control" id="nacionalidad" name="nacionalidad" type="text" required />
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
                        <label for="">Correo</label>
                        <input class="form-control" id="correo" name="correo" type="text" required />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Rut empresa</label>
                        <input class="form-control" id="rut_empresa" name="rut_empresa" type="text"
                        required/>
                    </div>
                </div>
            </div>
            <br>
            

            <a href="<?php echo base_url(); ?>/proveedores" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </main>