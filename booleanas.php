<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $x=TRUE;
        $y=FALSE;
        $z=($x or $y);
        echo "El valor de z es: ",$z;
        echo "<br>";
        var_dump($z);
        $a= 1.2e3;
        echo "<br>";
        echo $a;
        $b=7E-2; 
        echo "<br>";
        echo $b;
    ?>
    
</body>
</html>