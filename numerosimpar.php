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

        while ($contador < 100 ) {
            if ($contador % 2 == 1){
                echo $contador;
                $suma = $suma + $contador;
            }
        $contador = $contador + 1;
        }
        echo "<br>";
        echo "La suma total es ", $suma;
    ?>
</body>
</html>