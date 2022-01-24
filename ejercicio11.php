<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <?php
        $blancos=" ";
        echo "<pre>";
        echo "*<br>";
        echo "**<br>";
        for($i=1; $i<=6; $i++){
            $blancos=$blancos."&nbsp;";
            echo "*".$blancos."*<br/>";
            
        };
        echo "**********<br/>";
    echo "</pre>";

    ?>
</body>
</html>