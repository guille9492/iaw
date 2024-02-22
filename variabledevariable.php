<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

 //$$hola lo que hace es transformar el valor de $hola en un variable. Es decir
     //$$hola es lo equivalente a $guille = 30;
     $hola = 'guille';
     echo "La variable hola es de tipo ",var_dump($hola);
     echo "<br>";
     echo "La variable guille es de tipo ",$$hola = 30;
     var_dump($$hola);
     echo "<br>";
     echo "La variable guille es de tipo ",$guille = 30;
     var_dump($guille);

    ?>
</body>
</html>