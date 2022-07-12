<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            
            <form method="POST" action="<?php echo base_url(); ?>producto/editarProducto" autocomplete="off">
            

            <input type="hidden" id="id" name="id" value="<?php echo $datos->COD_PRODUCTO; ?>" />

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Nombre producto</label>
                        <input class="form-control" id="nombre_producto" name="nombre_producto" type="text" value="<?php
                         echo $datos->NOMBRE_PRODUCTO; ?>" required />
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Tipo producto</label>
                        <select class="form-control" id="marca" name="marca" required>
                            <option selected value="<?php echo $datos->TIPO_PRODUCTO; ?>"><?php echo $datos->TIPO_PRODUCTO; ?></option>
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
                        <label for="">Stock</label>
                        <input class="form-control" id="stock" name="stock" type="text" value="<?php
                         echo $datos->STOCK_UNIDAD; ?>" required/>
                    </div>
                </div>
            </div>
            <br>

            <a href="<?php echo base_url(); ?>producto" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </main>