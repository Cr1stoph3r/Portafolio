<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?php echo $titulo; ?></h3>

            <?php if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors();?>
                </div>
            <?php } ?>

            <form method="POST" action="<?php echo base_url(); ?>/configuracion/actualizar" autocomplete="off">
            <?php csrf_field(); ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Nombre de la tienda</label>
                        <input class="form-control" id="market_nombre" name="market_nombre" type="text"
                         value="<?php echo $nombre['valor']; ?>" autofocus required />
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">RFC</label>
                        <input class="form-control" id="market_rfc" name="market_rfc" type="text"
                         value="<?php echo $rfc['valor']; ?>" required
                         />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Telefono de la tienda</label>
                        <input class="form-control" id="market_telefono" name="market_telefono" type="text"
                         value="<?php echo $telefono['valor']; ?>" required />
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Email tienda</label>
                        <input class="form-control" id="market_email" name="market_email" type="text"
                         value="<?php echo $email['valor']; ?>" required
                         />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="">Direccion tienda</label>
                        <textarea class="form-control" name="market_direccion" id="market_direccion"
                         required><?php echo $direccion['valor']; ?></textarea>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="">Ticket leyenda</label>
                        <textarea class="form-control" name="ticket_leyenda" id="ticket_leyenda"
                         required><?php echo $leyenda['valor']; ?></textarea>
                    </div>
                </div>
            </div>

              <br>
            <a href="<?php echo base_url(); ?>/configuracion" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </main>

    <!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea eliminar este registro?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
        <a class="btn btn-danger btn-ok" id="btn-ok">Si</a>
      </div>
    </div>
  </div>
</div>