<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analista programmatore</title>
</head>
<body>
    <?php
        //leggo base e altezza
        $base = 2;
        $altezza = -5;

        //calcolo l'area
        $area = calcola_area( $base, $altezza);

        //stampo area
        echo($area);
    ?>
</body>
</html>

<?php

    function calcola_area ($lato1, $lato2){
        //verifico se i dati sono corretti
        //se i lati hanno valore negativo, assegno valore 0
        if ( $lato1 < 0 ) {
            $lato1 = 0;
        }
        if ( $lato2 < 0 ) {
            $lato2 = 0;
        }

        //moltiplico base * altezza
        $area = $lato1 * $lato2;

        //restituisco l'area
        return $area;
    }

?>