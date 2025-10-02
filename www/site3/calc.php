<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <form method="post" action="calc.php">
        <input type="number" name="n1">
        <select name="operacion">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="n2">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <p>
        <?php
            if($_POST["n1"] != null && $_POST["n2"] != null){
                switch($_POST["operacion"]){
                    case "+":
                        $res = $_POST["n1"] + $_POST["n2"];
                        break;
                    case "-":
                        $res = $_POST["n1"] - $_POST["n2"];
                        break;
                    case "x":
                        $res = $_POST["n1"] * $_POST["n2"];
                        break;
                    case "/":
                        $res = $_POST["n1"] / $_POST["n2"];
                        break;
                }
                echo "Solución: " . $res;
            } else {
                echo "Tienes que introducir un valor en ambos campos.";
            }
        ?>
    </p>
</body>
</html>