<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?php echo $titulo; ?></h3>
            
            <div>
                <p>
                    <a href="<?php echo base_url(); ?>ProductoController/registrar_producto"  class="btn
                    btn-info">Agregar</a>
                    
                    <a href="<?php echo base_url(); ?>producto/eliminados" class="btn  
                    btn-warning">Eliminados</a>
                </p>
            </div>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Cod producto</th>
                                <th>Nombre producto</th>
                                <th>Peso</th>
                                <th>Precio unidad</th>
                                <th>Cantidad</th>
                                <th>Tipo producto</th>
                                <th>Perecibilidad</th>
                                <th>Marca</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($datos->result() as $dato) { ?>
                                <tr>
                                    <td><?php echo $dato->COD_PRODUCTO ?></td>
                                    <td><?php echo $dato->NOMBRE_PRODUCTO ?></td>
                                    <td><?php echo $dato->PESO_NETO ?></td>
                                    <td><?php echo $dato->PRECIO_UNIDAD?></td>
                                    <td><?php echo $dato->STOCK_UNIDAD ?></td>
                                    <td><?php echo $dato->TIPO_PRODUCTO ?></td>
                                    <?php if($dato->PERECIBILIDAD == "P") { ?>
                                    <td><?php echo "PERECIBLE" ?></td>
                                    <?php } ?>
                                    <?php if($dato->PERECIBILIDAD == "N") { ?>
                                    <td><?php echo " NO PERECIBLE" ?></td>
                                    <?php } ?>
                                    <td><?php echo $dato->MARCA?></td>

                                    <td><form method="POST" action="<?php echo base_url(); ?>producto/editar" autocomplete="off"><input type="hidden" id="id" name="id" value="<?php echo $dato->COD_PRODUCTO; ?>" /><button type="submit" class="btn btn-warning"><i class="fas
                                    fa-pencil-alt"></i></button></form></td>

                                    <td><a data-toggle="modal" data-target="#modal-confirma<?= $dato->COD_PRODUCTO?>"
                                    data_placement="top" title="Eliminar registro" class="btn btn-danger"><i 
                                    class="fas fa-trash"></i></a></td>
                                </tr>
                                   <!-- Modal -->
<div class="modal fade" id="modal-confirma<?= $dato->COD_PRODUCTO?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <form method="POST" action="<?php echo base_url(); ?>producto/eliminar" autocomplete="off"><input type="hidden" id="id" name="id" value="<?php echo $dato->COD_PRODUCTO; ?>" /><button type="submit" class="btn btn-danger btn-ok" id="btn-ok">Si</button></form>
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