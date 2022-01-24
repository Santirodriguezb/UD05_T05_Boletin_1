<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
<?php
    echo "<pre>";
    for($linea=9; $linea>=1; $linea--){
        for($asterisco=1; $asterisco<=$linea; $asterisco++){
            if($asterisco == 1 || $asterisco == $linea || $linea == 9){
                
                echo "*";
            } else{
                echo "&nbsp";
            }
        };
        echo "<br/>";
    };
    echo "</pre>"
?>
</body>
</html>