<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $productos = array("Manzana"=>1.50, "Pan" =>0.70, "Tomate" => 1.30);
        //var_dump($productos);
        echo "<table>";
        echo "<tr><th>Productos</th><th>Precio</th></tr>";
        foreach( $productos as $prod => $pre){
            echo "<tr>";
            echo "<td>" . $prod . "</td>";
            echo "<td>" . $pre . "€</td>";
            echo "</tr>";
            $total= $total+$pre;
        }
        echo "<tr>";
        echo "<td>TOTAL: </td>";
        echo "<td>".$total."€</td>";
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>