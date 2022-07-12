<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?php echo $titulo; ?></h3>
            
            <div>
                <p>
                    <a href="<?php echo base_url(); ?>/unidades/nuevo" class="btn
                    btn-info">Agregar</a>
                    <a href="<?php echo base_url(); ?>/unidades/eliminados" class="btn
                    btn-warning">Eliminados</a>
                </p>
            </div>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>nombre</th>
                                <th>nombre corto</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($datos as $dato){ ?>
                                <tr>
                                    <td><?php echo $dato['id']; ?></td>
                                    <td><?php echo $dato['nombre']; ?></td>
                                    <td><?php echo $dato['nombre_corto']; ?></td>

                                    <td><a href="<?php echo base_url(). '/unidades/editar/'. $dato
                                    ['id']; ?>" class="btn btn-warning"><i class="fas
                                    fa-pencil-alt"></i></a></td>

                                    <td><a href="#" data-href="<?php echo base_url(). '/unidades/eliminar/'. $dato
                                    ['id']; ?>" data-toggle="modal" data-target="#modal-confirma"
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