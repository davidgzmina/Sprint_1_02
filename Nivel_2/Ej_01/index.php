
<?php

/*
Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
*/

$minuto = 8;


function moneyCall ($minuto,$tarifa = 5){
    $tarifaBase = 10;

    if($minuto<=3)
    {
        return $tarifaBase;
    }

    else 
    {

        $minutosAdicionales = $minuto - 3;
        $dinero = ($minutosAdicionales * $tarifa) + $tarifaBase ;

        return $dinero;
    }

}


$resultado = moneyCall($minuto);

echo "El coste de tu llamada es de $resultado centimos.";

?>
