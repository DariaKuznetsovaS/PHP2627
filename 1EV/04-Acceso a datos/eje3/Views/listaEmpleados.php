<div class="tabla">
<table>
    <thead>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Opciones</th>
        </tr>
    </thead>

<tbody>
<?php foreach($listaEmpleados as $empleado) :?>
<tr>
    <td><?=$empleado["dni"]?></td>
    <td><?=$empleado["nombre"]?></td>
    <td><?=$empleado["apellidos"]?></td>
    <td>
    <a href="index.php?accion=verDetalles&dni=<?=$empleado["dni"]?>">
    Ver detalles
    </a>|
    <a href="index.php?accion=eliminar&dni=<?=$empleado["dni"]?>">
        (Eliminar)</a>
</td>
</tr>

<?php endforeach; ?>
</tbody>

</table>
<p>*Opción secreta: <a href="index.php?accion=vaciar">Vaciar lista </a>(NO TOCAR)</p>
</div>
