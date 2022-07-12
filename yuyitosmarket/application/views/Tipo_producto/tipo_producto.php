<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?php echo $titulo; ?></h3>
            
            <div>
                <p>
                    <a href="<?php echo base_url(); ?>/Tipo_producto/nuevo" class="btn
                    btn-info">Agregar</a>
                    <a href="<?php echo base_url(); ?>/Tipo_producto/eliminados" class="btn
                    btn-warning">Eliminados</a>
                </p>
            </div>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>nombre</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($datos as $dato){ ?>
                                <tr>
                                    <td><?php echo $dato['id']; ?></td>
                                    <td><?php echo $dato['nombre_producto']; ?></td>

                                    <td><a href="<?php echo base_url(). '/Tipo_producto/editar/'. $dato
                                    ['id']; ?>" class="btn btn-warning"><i class="fas
                                    fa-pencil-alt"></i></a></td>

                                    <td><a href="<?php echo base_url(). '/Tipo_producto/eliminar/'. $dato
                                    ['id']; ?>" class="btn btn-danger"><i class="fas
                                    fa-trash"></i></a></td>
                                </tr>

                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>