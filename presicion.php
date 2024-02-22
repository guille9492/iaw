<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a= 1.23456789;
        $b= 1.23456780;
        $c= $a - $b;
        number_format($c, 10);
        echo ($c);
        echo "<br>";
        $epsilon= 0.00001;
            if(abs($a-$b) < $epsilon) {
                echo "true";
            }

        echo "<br>" . "<br>";
        $x = 8 - 6.4;
        $y= 1.6;
        echo $x . "<br>";
        echo $y . "<br>";
        var_dump($x == $y);
        echo "<br>";
        var_dump(round($x, 2) == round($y, 2));
    ?>
</body>
</html>