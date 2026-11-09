<?php require('layout/head.php') ?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
            <h4 class="font-weight-light mb-0">Nuevo vino <small class="text-muted">(<?= htmlspecialchars($bodega->nombre) ?>)</small></h4>
            <a href="index.php?accion=bodega_detalle&id=<?= $bodega->id ?>" class="btn btn-info btn-sm">Volver</a>
        </div>

        <form action="index.php?accion=vino_insertar" method="post">
            <input type="hidden" name="bodega_id" value="<?= $bodega->id ?>">
            <?php
            $vino = null;
            $soloLectura = false;
            require('partials/vino_campos.php');
            ?>
            <input type="submit" class="btn btn-primary" value="Añadir Vino">
        </form>
    </div>
</div>

<?php require('layout/footer.php') ?>
