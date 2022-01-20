<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $diccionario=array(
            'table' => 'mesa',
            'chair' => 'silla',
            'sofa' => 'sofa',
            'door' => 'puerta',
            'window' => 'ventana',
            'window' => 'ventana',
            'window' => 'ventana',
            'window' => 'ventana',
            'window' => 'ventana',
            'dish' => 'plato',
        );

        echo "<table border='1'>";
        
        //Recorremos o array asociativo
        
        foreach ($diccionario as $ingles => $castelan) {

            echo "<tr><td>".$ingles."</td><td>".$castelan."</td></tr>";

        }

        echo "</table>";
    ?>

</body>
</html>