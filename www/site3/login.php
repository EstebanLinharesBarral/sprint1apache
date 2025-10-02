<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <form method="post" action="login.php">
        <input type="text" name="nombre" placeholder="Nombre">
        <br>
        <input type="text" name="contrasena" placeholder="Contraseña">
        <br>
        <input type="submit" value="Log in">
    </form>

    <?php
        if($_POST["nombre"] == "admin" && $_POST["contrasena"] == "1234"){
            echo "Acceso permitido";
        } else {
            echo "Acceso denegado";
        }
    ?>
</body>
</html>