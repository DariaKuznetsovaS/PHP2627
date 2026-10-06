<?php
/*
 * Campos del formulario de vino (vista parcial).
 * Variables que utiliza:
 *   $vino         objeto vino o null (formulario vacío)
 *   TIPOS_VINO    constante (index.php) con los tipos de vino posibles
 *   $soloLectura  true para mostrar los campos deshabilitados
 */
$disabled = $soloLectura ? "disabled" : "";
?>
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required
           value="<?= $vino->nombre ?? '' ?>" <?= $disabled ?>>
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea id="descripcion" name="descripcion" class="form-control" rows="3" <?= $disabled ?>><?= $vino->descripcion ?? '' ?></textarea>
</div>
<div class="form-group">
    <label for="anio">Año</label>
    <input type="number" id="anio" name="anio" class="form-control" placeholder="Año" min="1800" max="2100"
           value="<?= $vino->anio ?? '' ?>" <?= $disabled ?>>
</div>
<div class="form-group">
    <label for="alcohol">Alcohol</label>
    <input type="number" id="alcohol" name="alcohol" class="form-control" placeholder="Porcentaje de alcohol" step="0.1" min="0" max="100"
           value="<?= $vino->alcohol ?? '' ?>" <?= $disabled ?>>
</div>
<div class="form-group">
    <label for="tipo">Tipo de vino</label>
    <select id="tipo" name="tipo" class="custom-select" <?= $disabled ?>>
        <?php foreach (TIPOS_VINO as $tipo) : ?>
            <option value="<?= $tipo ?>" <?= ($vino->tipo ?? '') === $tipo ? "selected" : "" ?>><?= $tipo ?></option>
        <?php endforeach; ?>
    </select>
</div>
