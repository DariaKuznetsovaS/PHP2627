<?php require("head.php"); ?>

<a href="index.php?accion=añadirBodega">Añadir Bodega</a>
<?php if(isset($_GET["mensaje"]) && $_GET["mensaje"] == "insertado"): ?>

    <p>La bodega se ha insertado correctamente.</p>

<?php endif; ?>
    
<table>
<thead>
    <tr>
        <th>Nombre</th>
        <th>Locaclización</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
</thead>

<tbody> 
    <?php foreach($listaBodegas as $bodega) : ?>
        <tr>
            <td><?=$bodega["nombre"]?></td>
            <td><?=$bodega["direccion"]?></td>
            <td><?=$bodega["telefono"]?></td>
            <td><?=$bodega["email"]?></td>
            <td><a href="index.php?accion=verDetalles&id=<?=$bodega["id"]?>">Entrar</a>
                
            <a href="index.php?accion=borrar&id=<?=$bodega["id"]?>">Borrar</a></td>
        </tr>        
    <?php endforeach; ?>
</tbody>


</table>
<?php require("footer.php"); ?>