<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 1</title>
    <style>
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 1rem;
            border: dotted pink 1px;
            width: 60%;
            margin: 0 auto;
            background-color: lightblue;
            font-weight: bold;
        }
    
        input[type="submit"]{
            width: 10%;
            background-color: lightyellow;
            font-weight: bold;
            margin: 1rem;
        }
        input[type="text"], input[type="password"]{
            width: 20%;
            background-color: pink;
            padding: .3rem;
        }
        form > *, form{
            border-radius: 1rem;
        }

    </style>
</head>
<body>
    

<form method="post" action="index.php">
        <label for="user">Usuario:</label>
        <input type="text" id="user" name="user">

        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass">

<p><?=$mensaje ?></p>
<input type="submit" value="Entrar">

</form>

</body>
</html>