<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Numeri primi</h1>
    <?php controlla_numeri_primi(); ?>
</body>
</html>

<?php

    function controlla_numeri_primi() {
        //leggo un numero
        $numero = 5;

        //se il numero è primo stampo "è primo"
        if (numero_primo($numero)){
            echo "il numero ";
            echo $numero;
            echo " è primo";
        }else{
        //altrimenti stampo "non è primo"
            echo "il numero ";
            echo $numero;
            echo " non è primo";        
        }
    }

    //restituisce vero se il numero è primo
    //restituisce falso altrimenti
    function numero_primo($valore){
        //divido il numero per tutti i numeri più piccoli tranne 1
        //se ottengo resto zero il numero non è primo
        $controllo = $valore - 1;

        while ($controllo > 1) {
            // echo $valore . "<br>";
            // echo $valore . "%" . ($valore - 1) . "<br>" ;
            if ($valore % $controllo == 0) {
                return false;
            };
            $controllo--;
        }

        return true;
    }
?>