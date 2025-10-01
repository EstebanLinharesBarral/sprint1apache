<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        function imc($peso, $altura){
            $IMC = $peso/($altura*$altura);
            if($IMC < 18.5){
                echo "Bajo peso:" . $peso;
            } else if($IMC >= 18.5 && $IMC < 24.9){
                echo "Peso normal";
            } else if ($IMC > 25){
                echo "Sobrepeso";
            }
        }

        imc($_GET["peso"], $_GET["altura"]);
    ?>
</body>
</html>