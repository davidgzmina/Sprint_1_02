<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint_01_tema_02_Nv_2_ej_01</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: cadetblue;
            font-size: 30px;
            color: white;
        }
    </style>
</head>
<body>
<?php

/*
Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
*/

$minuto = 1;
$tarifa = 5;




function moneyCall ($minuto,$tarifa){
    $tarifaBase = 10;

    if($minuto<=3){
        return $tarifaBase;
    }

    else {

        $minutosAdicionales = $minuto - 3;
        $dinero = ($minutosAdicionales * $tarifa) + $tarifaBase ;

        return $dinero;
    }

}

//Prueba => $resultado = moneyCall(8,5);
$resultado = moneyCall($minuto,$tarifa);

echo "El coste de tu llamada es de $resultado centimos.";

?>
</body>
</html>