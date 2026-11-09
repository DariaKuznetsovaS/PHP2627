<?php require('layout/head.php') ?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
            <h4 class="font-weight-light mb-0">Nueva bodega</h4>
            <a href="index.php" class="btn btn-info btn-sm">Volver</a>
        </div>

        <form action="index.php?accion=bodega_insertar" method="post">
            <?php
            $bodega = null;
            $soloLectura = false;
            require('partials/bodega_campos.php');
            ?>
            <input type="submit" class="btn btn-primary" value="Añadir">
        </form>
    </div>
</div>

<?php require('layout/footer.php') ?>
