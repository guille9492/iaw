<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $suma = 0;

        for ($a = 1; $a <=100; $a++ ) {
            if ($a % 5 == 0){
                echo $a . "<br>";
                $suma = $suma + $a;
            }
                
        }
    
        echo "La suma total es: ", $suma . "<br>";
        echo "El cuadrado de la suma es: " . $cuadrado = $suma * $suma;
    ?>
</body>
</html>