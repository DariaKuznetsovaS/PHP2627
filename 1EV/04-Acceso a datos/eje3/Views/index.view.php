<?php require("head.php") ?>

<body>
    <div class="buscador">
        <form action="index.php" method="get">
    <input type="search" name="nombreBuscado" placeholder="Introduce el nombre exacto">
    <input type="submit" value="filtrar">
    <input type="hidden" name="accion" value="buscar">
    </form>
    </div>
    
<?php require("listaEmpleados.php") ?>

<?php require("formularioEmpleado.php") ?>




</body>
</html>