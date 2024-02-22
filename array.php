<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $deportes = array (
            "futbol","tenis","baloncesto","voleybol","natacion","maraton",
            "lanzamiento de jabalina","ajedrez"
        );

      foreach ($deportes as $deportes) {
          echo $deportes . "<br>";
        }
        
        //var_dump($deportes);
    
        //echo "<br>";
        //echo $deportes [0];
       
    ?>
   
</body>
</html>