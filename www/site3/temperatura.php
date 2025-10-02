<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Calculadora de Temperatura</h1>
    <form action="temperatura.php" method="post">
        <label for="Temperatura">Temperatura</label>
        <input type="number" name="Temperatura" placeholder="0" id="conversion" value="temperatura"></br>

        <label for="CF">Celsius to Farenheit</label>
        <input type="radio" name="CambioT" value="CelFa" id="CF"><br>
        <label for="FC">Farenheit to Celsius</label>
        <input type="radio" name="CambioT" value="FaCel" id="FC"><br>

        <input type="submit" value="Calcular"> 
    </form>
    <br>
    <p>
    <?php
        if(isset($_POST["CambioT"])){
            if($_POST["CambioT"] == "CelFa"){
                $vTemp = $_POST["Temperatura"];
                $res = ($vTemp * 9/5) +32;
                echo $vTemp ."ºC son " . $res ."F";
            } else {
                $vTemp = $_POST["Temperatura"];
                $res = ($vTemp - 32) * 5 / 9;
                echo $vTemp ."F son "  . $res ."ºC";
            }
        }
    ?>
    </p>
</body>
</html>