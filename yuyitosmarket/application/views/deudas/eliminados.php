<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?php echo $titulo; ?></h3>
            
            <div>
                <p>
                    <a href="<?php echo base_url(); ?>/clientes" class="btn
                    btn-warning">Clientes</a>
                </p>
            </div>
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                                <th>Id</th>
                                <th>Rut cliente</th>
                                <th>Cod usuario</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($datos->result() as $dato) { ?>
                                <tr>
                                    <td><?php echo $dato->RUT_CLIENTE ?></td>
                                    <td><?php echo $dato->COD_USUARIO ?></td>

                                    <td><a href="#" data-href="<?php echo base_url(). '/clientes/reingresar/'. $dato
                                    ['id']; ?>" data-toggle="modal" data-target="#modal-confirma"
                                    data_placement="top" title="Reingresar registro" class="btn btn-primary"><i 
                                    class="fas
                                    fa-arrow-alt-circle-up"></i></a></td>
                                </tr>

                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

        <!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reingresar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>??Desea reingresar este registro?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
        <a class="btn btn-danger btn-ok" id="btn-ok">Si</a>
      </div>
    </div>
  </div>
</div>