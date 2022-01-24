<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $horario=array(
            '8:50 - 9:40'=>array('IAW','SAD','ASX','ASX','IAW'),
            '9:40 - 10:30'=>array('IAW','SAD','EEA','ASX','SRI',),
            '10:30 - 11:20'=>array('SRI','SAD','EEA','EEA','SRI',),
            '11:20 - 12:00'=>array('RECREO'),
            '12:00 - 12:50'=>array('SRI','ASO','ASO','IAW','SAD'),
            '12:50 - 13:40'=>array('ASO','ASO','IAW','IAW','SAD'),
            '13:40 - 14:30'=>array('ASX','ASO','IAW','SRI','SAD'),
            '16:00 - 16:50'=>array('','SRI','','ASO',''),
            '16:00 - 16:50'=>array('','SRI','','ASO',''),
            '16:00 - 16:50'=>array('','SRI','','ASO',''),
        );

        echo "<table border='1'>";
        echo "<tr></tr><th>LUNS</th><th>MARTES</th><th>MERCORES</th><th>XOVES</th><th>VENRES</th>";
        foreach ( $horario as $hora => $modulos ) {
            echo "<tr>";
                echo "<th>.$hora.</th>";
            echo "</tr>";
            foreach ($modulos as $m){
                if(count($modulos)==1){

                    echo "<td colspan = '5'>".$m."</td>";

                }
            }

        }
        echo "</table>";
        
    ?>
</body>
</html>