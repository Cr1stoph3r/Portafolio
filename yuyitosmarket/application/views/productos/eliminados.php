<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?php echo $titulo; ?></h3>
            
            <div>
                <p>
                    <a href="<?php echo base_url(); ?>producto" class="btn
                    btn-warning">Eliminados</a>
                </p>
            </div>
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                                <th>cod producto</th>
                                <th>nombre producto</th>
                                <th>precio venta</th>
                                <th>stock</th>
                                <th>tipo producto</th>
                                <th>peso</th>
                                <th>marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($datos->result() as $dato){ ?>
                                <tr>
                                    <td><?= $dato->COD_PRODUCTO; ?></td>
                                    <td><?= $dato->NOMBRE_PRODUCTO; ?></td>
                                    <td><?= $dato->PRECIO_UNIDAD; ?></td>
                                    <td><?= $dato->STOCK_UNIDAD; ?></td>
                                    <td><?= $dato->TIPO_PRODUCTO; ?></td>
                                    <td><?= $dato->PESO_NETO; ?></td>
                                    <td><?= $dato->MARCA; ?></td>

                                    <td><button data-toggle="modal" data-target="#modal-confirma<?= $dato->COD_PRODUCTO; ?>"
                                    data_placement="top" title="Reingresar registro" class="btn btn-primary"><i 
                                    class="fas
                                    fa-arrow-alt-circle-up"></button></a></td>
                                </tr>
                              <!-- Modal -->
                              <div class="modal fade" id="modal-confirma<?= $dato->COD_PRODUCTO; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <form method="POST" action="<?php echo base_url(); ?>producto/eliminadosActivar" autocomplete="off"><input type="hidden" id="id" name="id" value="<?= $dato->COD_PRODUCTO; ?>" /><button type="submit" class="btn btn-danger btn-ok" id="btn-ok">Si</button></form>
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