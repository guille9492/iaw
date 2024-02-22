<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $contador = 0;
        $suma = 0;

        while ($contador < 50 ) {
                echo $cuadrado= $contador * $contador;
                echo "<br>";
                $suma = $suma + $cuadrado;
            
        $contador = $contador + 1;
        }
        echo "<br>";
        echo "La suma total es ", $suma;
    ?>
</body>
</html>