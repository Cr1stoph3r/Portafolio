<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h3 class="mt-4"><?php echo $titulo; ?></h3>
            <div>
                <p>
                    <a href="<?php echo base_url(); ?>clientes/nuevo" class="btn
                    btn-info">Agregar</a>
                    <a href="<?php echo base_url(); ?>clientes/eliminados" class="btn
                    btn-warning">Eliminados</a>
                    
                </p>
            </div>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                
                                <th>Id deuda</th>
                                <th>Fecha fiado</th>
                                <th>Fecha limite</th>
                                <th>Abonado</th>
                                <th>Deuda pendiente</th>
                                <th>Realizado</th>
                                <th>Rut cliente</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($datos->result() as $dato) { ?>
                                <tr>
                                    <td><?php echo $dato->ID_DEUDA ?></td>
                                    <td><?php echo $dato->FECHA_FIADO ?></td>
                                    <td><?php echo $dato->FECHA_LIMITE ?></td>
                                    <td><?php echo $dato->ABONADO ?></td>
                                    <td><?php echo $dato->DEUDA_PENDIENTE ?></td>
                                    <td><?php echo $dato->REALIZADO ?></td>
                                    <td><?php echo $dato->RUT_CLIENTE ?></td>

                                    <td><a href="<?php echo base_url(). 'deudas/editar/' ?>" class="btn btn-warning"><i class="fas
                                    fa-pencil-alt"></i></a></td>

                                    <td><a href="#" data-href="<?php echo base_url(). 'deudas/eliminar/'?>" data-toggle="modal" data-target="#modal-confirma"
                                    data_placement="top" title="Eliminar registro" class="btn btn-danger"><i 
                                    class="fas fa-trash"></i></a></td>
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