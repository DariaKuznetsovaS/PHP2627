<?php require("head.php"); ?>
<style>
.info{
    display: flex;
    flex-direction: column;
    width: 30%;
    gap: 1rem;
}

input{
    background-color: lightblue;
    padding: .5rem;
    border-radius: .5rem;
    color: white;
}


</style>


<h3>Datos de bodega</h3>
<a href="index.php?accion=volver">Volver</a>

<div class="info">
<label for="nombre">Nombre</label>
<input type="text" id="nombre" placeholder="<?=$bodega["nombre"]?>" disabled>

<label for="direccion">Dirección</label>
<input type="text" id="direccion" placeholder="<?=$bodega["direccion"]?>" disabled>

<label for="email">Email</label>
<input type="email" id="direccion" placeholder="<?=$bodega["email"]?>" disabled>

<label for="tel">Teléfono</label>
<input type="text" id="tel" placeholder="<?=$bodega["telefono"]?>" disabled>

<label for="contacto">Persona de contacto</label>
<input type="text" id="contacto" placeholder="<?=$bodega["contacto"]?>" disabled>

<label for="fecha">Fecha de fundación</label>
<input type="text" id="fecha" placeholder="<?=$bodega["fecha_fund"]?>" disabled>

</div>

<div class="detalles">
    
<h3>¿Dispone de restaurante?</h3>
<input type="radio" name="restaurante" value="si"
    <?= $bodega["restaurante"] == "1" ? "checked" : "" ?> disabled>
<label>Sí</label>

<input type="radio" name="restaurante" value="no"
    <?= $bodega["restaurante"] == "0" ? "checked" : "" ?> disabled>
<label>No</label>
<h3>¿Dispone de hotel?</h3>
<input type="radio" name="hotel" value="si"
    <?= $bodega["hotel"] == "1" ? "checked" : "" ?> disabled>
<label>Sí</label>

<input type="radio" name="hotel" value="no"
    <?= $bodega["hotel"] == "0" ? "checked" : "" ?> disabled>
<label>No</label>
</div>



<?php require("footer.php"); ?>