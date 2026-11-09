<?php require('layout/head.php') ?>

<div class="row">
    <div class="col-md-6"><!-- Columna datos de la bodega -->
        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
            <h4 class="font-weight-light mb-0">Datos bodega</h4>
            <div>
                <?php if ($soloLectura) : ?>
                    <a href="index.php?accion=bodega_detalle&id=<?= $bodega->id ?>&editar" class="btn btn-outline-warning btn-sm"><i class="fa fa-pencil-square-o"></i> Editar</a>
                <?php endif; ?>
                <a href="index.php" class="btn btn-outline-primary btn-sm"><i class="fa fa-arrow-left"></i> Volver</a>
                <a href="index.php?accion=bodega_eliminar&id=<?= $bodega->id ?>" class="btn btn-outline-danger btn-sm"
                   onclick="return confirm('¿Seguro que quieres dar de baja esta bodega y todos sus vinos?')"><i class="fa fa-trash-o"></i> Eliminar</a>
            </div>
        </div>

        <form action="index.php?accion=bodega_actualizar" method="post">
            <input type="hidden" name="id" value="<?= $bodega->id ?>">
            <?php require('partials/bodega_campos.php') ?>
            <input type="submit" class="btn btn-primary" value="Guardar" <?= $soloLectura ? "disabled" : "" ?>>
            <?php if (!$soloLectura) : ?>
                <a href="index.php?accion=bodega_detalle&id=<?= $bodega->id ?>" class="btn btn-link">Cancelar</a>
            <?php endif; ?>
        </form>
    </div><!-- fin: Columna datos de la bodega -->

    <div class="col-md-6"><!-- Columna vinos de la bodega -->
        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
            <h4 class="font-weight-light mb-0">Vinos disponibles</h4>
            <a href="index.php?accion=vino_nuevo&bodega_id=<?= $bodega->id ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-plus"></i> Añadir vino</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th><th>Tipo</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($vinos as $vino) : ?>
                <tr>
                    <td><?= htmlspecialchars($vino->nombre) ?></td>
                    <td><?= htmlspecialchars($vino->tipo) ?></td>
                    <td>
                        <a href="index.php?accion=vino_detalle&id=<?= $vino->id ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-sign-in"></i> Ver</a>
                        <a href="index.php?accion=vino_eliminar&id=<?= $vino->id ?>" class="btn btn-outline-danger btn-sm"
                           onclick="return confirm('¿Seguro que quieres borrar este vino?')"><i class="fa fa-trash-o"></i> Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>

            <?php if (empty($vinos)) : ?>
                <tr><td colspan="3" class="text-center text-muted">Esta bodega todavía no tiene vinos</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div><!-- fin: Columna vinos de la bodega -->
</div>

<?php require('layout/footer.php') ?>
