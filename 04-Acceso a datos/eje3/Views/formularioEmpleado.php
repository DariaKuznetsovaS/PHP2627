<form action="index.php" method="get">
    <h3>Añadir un nuevo empleado</h3>
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="apellidos" placeholder="Apellidos">
    <input type="number" name="edad" placeholder="Edad">
    <input type="date" name="fechaNac">
    <input type="text" name="dni" placeholder="DNI">
    <select name="sexo">
        <option value="mujer">Mujer</option>
        <option value="hombre">Hombre</option>
    </select>
    <textarea name="curriculum"></textarea>
    <input type="hidden" name="accion" value="insertar">
    <input type="submit" value="Añadir">

</form>