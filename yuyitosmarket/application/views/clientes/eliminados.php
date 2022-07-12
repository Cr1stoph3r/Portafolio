<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?php echo $titulo; ?></h3>
            
            <div>
                <p>
                    <a href="<?php echo base_url(); ?>clientes" class="btn
                    btn-warning">Clientes</a>
                </p>
            </div>
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                                <th>Rut cliente</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($datos->result() as $dato) { ?>
                                <tr>
                                    <td><?php echo $dato->RUT_CLIENTE ?></td>
                                    <td><?php echo $dato->NOMBRE ?></td>
                                    <td><?php echo $dato->APELLIDOS ?></td>
                                    <td><?php echo $dato->DIRECCION ?></td>
                                    <td><?php echo $dato->TELEFONO ?></td>
                                    <td><?php echo $dato->CORREO ?></td>

                                    
                                    <td><button data-toggle="modal" data-target="#modal-confirma<?= $dato->RUT_CLIENTE; ?>"
                                    data_placement="top" title="Reingresar registro" class="btn btn-primary"><i 
                                    class="fas
                                    fa-arrow-alt-circle-up"></button></a></td>
                                </tr>
                                 <!-- Modal -->
                              <div class="modal fade" id="modal-confirma<?= $dato->RUT_CLIENTE; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Reingresar registro</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>¿Desea reingresar este registro?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                              <form method="POST" action="<?php echo base_url(); ?>clientes/eliminadosActivar" autocomplete="off"><input type="hidden" id="id" name="id" value="<?= $dato->RUT_CLIENTE; ?>" /><button type="submit" class="btn btn-danger btn-ok" id="btn-ok">Si</button></form>
                            </div>
                          </div>
                        </div>
                      </div>
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
        <p>¿Desea reingresar este registro?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
        <a class="btn btn-danger btn-ok" id="btn-ok">Si</a>
      </div>
    </div>
  </div>
</div>