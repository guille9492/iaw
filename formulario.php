<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
        $usuario = $_GET['usuario'];
        $departamento = $_GET['departamento'];
        echo "El usuario es: " . $usuario;
        echo "<br>";
        echo "El departamento es: " . $departamento;
    ?>
</body>
</html>