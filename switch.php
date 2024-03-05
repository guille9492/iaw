<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numero1 = 3;
    $numero2 = 1;
// el simbolo % te da el módulo de la division, para saber si es par o impar
 //   if (($numero1*$numero2 %2)== 0) {
   //     echo "Es par";
   // }
   // else {
    //    echo "Es impar";
  //  }

    switch ($numero1*$numero2 %2) {
        case 0: echo "es par";break;
        default: echo "es impar";break;
    }


    ?>
</body>
</html>