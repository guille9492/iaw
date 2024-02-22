<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
     //define("C", 5); otra forma de declarar las constantes
     //echo C

     const A = 5;
     const B = 0;
     
     // Las sentencias de abajo separado por comas se ejecutar por partes. Si estuvieran
     // anidadas (con un .) se ejecutarían la sentencia entera.
     echo "La suma es ", (A + B) . "<br>". "<br>";
     echo "La resta es ", (A - B). "<br>". "<br>";
     echo "La multiplicacion es ", (A * B) . "<br>". "<br>";
     
     if (B == 0)  {
        echo "No se puede realizar la operación" . "<br>"."<br>";
     }
        else {
            echo "La division es ", (A / B). "<br>"."<br>";
     }
    


    ?>

</body>
</html>