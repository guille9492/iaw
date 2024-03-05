<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nota = 7;
    $nota2 = 5;

    if ($nota < $nota2) {
        echo "Has suspendido";
    }
    elseif ($nota > $nota2) {
        echo "Has aprobado";
    }
    else {
        echo "Es la misma nota";
    }
    ?>
</body>
</html>