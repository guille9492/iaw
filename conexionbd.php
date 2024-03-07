<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = 'localhost';
        $username = 'phpmyadmin';
        $password = 'phpmyadmin';
        $database = 'biblioteca';

    //Crear conexion

     $conn = new mysqli($servername, $username, $password, $database);

     //Verificar conexion 

     if ($conexion->connect_error) {
        die ("Conexion fallida " . $conexion->connect_error);
        //echo "Conexión fallida";
    }

    echo "Conexión exitosa";

     // Cerrar conexión 
     $conexion->close();
     ?>

</body>
</html>