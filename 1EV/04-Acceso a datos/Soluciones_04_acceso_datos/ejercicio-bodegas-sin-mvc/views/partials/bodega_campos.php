<?php
/*
 * Campos del formulario de bodega (vista parcial).
 * Variables que utiliza:
 *   $bodega       objeto bodega o null (formulario vacío)
 *   $soloLectura  true para mostrar los campos deshabilitados
 */
$disabled = $soloLectura ? "disabled" : "";
$restaurante = $bodega ? $bodega->restaurante : 0;
$hotel = $bodega ? $bodega->hotel : 0;
?>
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required
           value="<?= $bodega->nombre ?? '' ?>" <?= $disabled ?>>
</div>
<div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección" required
           value="<?= $bodega->direccion ?? '' ?>" <?= $disabled ?>>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Email"
           value="<?= $bodega->email ?? '' ?>" <?= $disabled ?>>
</div>
<div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Teléfono"
           value="<?= $bodega->telefono ?? '' ?>" <?= $disabled ?>>
</div>
<div class="form-group">
    <label for="contacto">Persona de contacto</label>
    <input type="text" id="contacto" name="contacto" class="form-control" placeholder="Persona de contacto"
           value="<?= $bodega->contacto ?? '' ?>" <?= $disabled ?>>
</div>
<div class="form-group">
    <label for="fundacion">Año de fundación</label>
    <input type="number" id="fundacion" name="fundacion" class="form-control" placeholder="Año de fundación" min="1000" max="2100"
           value="<?= $bodega->fundacion ?? '' ?>" <?= $disabled ?>>
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea id="descripcion" name="descripcion" class="form-control" rows="3" <?= $disabled ?>><?= $bodega->descripcion ?? '' ?></textarea>
</div>

<h5 class="font-weight-light">¿Dispone de restaurante?</h5>
<div class="form-check">
    <input class="form-check-input" type="radio" name="restaurante" id="restaurante-si" value="1" <?= $restaurante ? "checked" : "" ?> <?= $disabled ?>>
    <label class="form-check-label" for="restaurante-si">Sí</label>
</div>
<div class="form-check mb-3">
    <input class="form-check-input" type="radio" name="restaurante" id="restaurante-no" value="0" <?= !$restaurante ? "checked" : "" ?> <?= $disabled ?>>
    <label class="form-check-label" for="restaurante-no">No</label>
</div>

<h5 class="font-weight-light">¿Dispone de hotel?</h5>
<div class="form-check">
    <input class="form-check-input" type="radio" name="hotel" id="hotel-si" value="1" <?= $hotel ? "checked" : "" ?> <?= $disabled ?>>
    <label class="form-check-label" for="hotel-si">Sí</label>
</div>
<div class="form-check mb-3">
    <input class="form-check-input" type="radio" name="hotel" id="hotel-no" value="0" <?= !$hotel ? "checked" : "" ?> <?= $disabled ?>>
    <label class="form-check-label" for="hotel-no">No</label>
</div>
