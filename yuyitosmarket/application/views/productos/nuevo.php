<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4">Registrar productos</h4>
            <br>
            
            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors();?>
                </div>
            <?php } ?>
            
            <form method="POST" action="<?php echo base_url(); ?>producto/insertar" autocomplete="off">
           
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Cod producto</label>
                        <input class="form-control" id="cod_producto" name="cod_producto" type="text"
                        autofocus required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Nombre producto</label>
                        <input class="form-control" id="nombre_producto" name="nombre_producto" type="text"  required />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Peso</label>
                        <input class="form-control" id="peso" name="peso" type="text"
                        required/>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Precio unidad</label>
                        <input class="form-control" id="precio_unidad" name="precio_unidad" type="text"  required />
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Cantidad</label>
                        <input class="form-control" id="stock" name="stock" type="text"
                        required/>
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="">Marca</label>
                        <select class="form-control" id="marca" name="marca" required>
                            <option value="">Seleccionar tipo producto</option>
                            <?php foreach($marcas->result() as $marca) { ?>
                                <option value="<?php echo $marca->COD_MARCA; ?>"><?php echo $marca->MARCA; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Tipo producto</label>
                        <select class="form-control" id="tipo_producto" name="tipo_producto" required>
                            <option value="">Seleccionar tipo producto</option>
                            <?php foreach($productos->result() as $producto) { ?>
                                <option value="<?php echo $producto->TIPO_PRODUCTO; ?>"><?php echo $producto->TIPO_PRODUCTO; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Perecibilidad</label>
                        <select class="form-control" id="perecibilidad" name="perecibilidad" required>
                            <option value="">Seleccionar tipo producto</option>
                                <option value="P">PERECIBLE</option>
                                <option value="N">NO ES PERECIBLE</option>
                        </select>
                    </div>
                </div>
            </div>

            <br>

            <a href="<?php echo base_url(); ?>producto" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </main>