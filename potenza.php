<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Esempio di calcolo della potenza</h1>
    <?php stampa_potenza(); ?>
</body>
</html>

<?php

    function stampa_potenza(){
        //leggo base, esponente
        $base = 2;
        $esponente = 3;
        $risultato = 1; //inizializzo la variabile

        echo 'risultato all\'inizio: ';
        echo $risultato;
        echo '<br>';

        //per esponente volte risultato = risultato * base
        for ($i=0; $i < $esponente; $i++) { 
            $risultato = $risultato * $base;
            echo 'adesso risultato vale: ';
            echo $risultato;
            echo '<br>';   
        }

        //stampo risultato
        echo 'base: ';
        echo ($base);
        echo '<br>';
        echo 'esponente: ';
        echo ($esponente);
        echo '<br>';
        echo 'risultato: ';
        echo $risultato;
    }

?>