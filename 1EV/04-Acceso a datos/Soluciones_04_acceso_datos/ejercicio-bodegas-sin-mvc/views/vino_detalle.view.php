<?php require('layout/head.php') ?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
            <h4 class="font-weight-light mb-0">Detalle vino</h4>
            <div>
                <?php if ($soloLectura) : ?>
                    <a href="index.php?accion=vino_detalle&id=<?= $vino->id ?>&editar" class="btn btn-outline-warning btn-sm"><i class="fa fa-pencil-square-o"></i> Editar</a>
                <?php endif; ?>
                <a href="index.php?accion=bodega_detalle&id=<?= $vino->bodega_id ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-arrow-left"></i> Volver</a>
                <a href="index.php?accion=vino_eliminar&id=<?= $vino->id ?>" class="btn btn-outline-danger btn-sm"
                   onclick="return confirm('¿Seguro que quieres borrar este vino?')"><i class="fa fa-trash-o"></i> Borrar</a>
            </div>
        </div>

        <form action="index.php?accion=vino_actualizar" method="post">
            <input type="hidden" name="id" value="<?= $vino->id ?>">
            <?php require('partials/vino_campos.php') ?>
            <input type="submit" class="btn btn-primary" value="Actualizar Vino" <?= $soloLectura ? "disabled" : "" ?>>
            <?php if (!$soloLectura) : ?>
                <a href="index.php?accion=vino_detalle&id=<?= $vino->id ?>" class="btn btn-link">Cancelar</a>
            <?php endif; ?>
        </form>
    </div>
</div>

<?php require('layout/footer.php') ?>
