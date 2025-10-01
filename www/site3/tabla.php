<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    function tabla($n){
        for($i = 0; $i < 10; $i++){
            $res = $n * $i;
            echo "<tr>";
            echo "<td>" . $n . "</td>";
            echo "<td>" . " x " . "</td>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . "= " . $res . "<br></td>";
            echo "</tr>";
        }
    }
    echo "<table>";
    tabla(7);
    echo "</table>"
    ?>
</body>
</html>