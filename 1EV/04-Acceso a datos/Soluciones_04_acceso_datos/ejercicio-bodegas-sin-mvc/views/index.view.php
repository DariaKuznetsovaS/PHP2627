<?php require('layout/head.php') ?>

<a href="index.php?accion=bodega_nueva" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Añadir Bodega</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th><th>Localización</th><th>Teléfono</th><th>Email</th><th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <!-- Generar el contenido de la tabla iterando por cada bodega -->
    <?php foreach ($bodegas as $bodega) : ?>
        <tr>
            <td><?= htmlspecialchars($bodega->nombre) ?></td>
            <td><?= htmlspecialchars($bodega->direccion) ?></td>
            <td><?= htmlspecialchars($bodega->telefono ?? '') ?></td>
            <td><?= htmlspecialchars($bodega->email ?? '') ?></td>
            <td>
                <a href="index.php?accion=bodega_detalle&id=<?= $bodega->id ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-sign-in"></i> Entrar</a>
                <a href="index.php?accion=bodega_eliminar&id=<?= $bodega->id ?>" class="btn btn-outline-danger btn-sm"
                   onclick="return confirm('¿Seguro que quieres dar de baja esta bodega y todos sus vinos?')"><i class="fa fa-trash-o"></i> Borrar</a>
            </td>
        </tr>
    <?php endforeach; ?>

    <?php if (empty($bodegas)) : ?>
        <tr><td colspan="5" class="text-center text-muted">No hay bodegas registradas</td></tr>
    <?php endif; ?>
    </tbody>
</table>

<?php require('layout/footer.php') ?>
