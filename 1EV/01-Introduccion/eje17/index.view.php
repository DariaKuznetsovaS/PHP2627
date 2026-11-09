<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form action="index.php" method="GET">
        <input type="text" name="user">
        <input type="password" name="pass">
        <button type="submit">Entrar</button>
    </form>

    <p><?= $mensaje ?></p>

</body>
</html>