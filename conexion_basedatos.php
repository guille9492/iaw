<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = 'localhost:3306';
        $username = 'usuario';
        $password = 'usuario';
       // $database = 'wordprdsess';
        //$socket = "";
        //$port = 3306;
        //Crear conexion
        $conn = new mysqli($servername, $username, $password);
     
         //$conn = mysqli_connect($servername, $username, $password, $database);
        //Verificar conexión y crear DB
       if (!$conn){
           echo "Conexión fallida";
        } else {
            $sql = "CREATE DATABASE IF NOT EXISTS futbol";
            if (mysqli_query($conn,$sql)) {
                echo "Base de datos creada";
            }
            else {
                echo "Error: " . mysqli_error ($conn);
            }

           // Seleccionar base de datos usuarios grupos
            mysqli_select_db ($conn, "futbol");

            //Crear tabla
            $asir = "CREATE TABLE equipos(nombre VARCHAR(20))";

            if (mysqli_query($conn,$asir)) {
            echo "Tabla creada";
        }
            else {
                "Tabla no creada";
            }
        }

        //cerrar conexión
       $con->close();

    ?>
</body>
</html>