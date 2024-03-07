<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
        $pan = $_GET['pan'];
        $conocer = $_GET['conocer'];
        echo "El pan del pedido es : " . $pan;
        echo "<br>";
        echo "Nos ha conocido mediante: " . $conocer;
    ?>
</body>
</html>