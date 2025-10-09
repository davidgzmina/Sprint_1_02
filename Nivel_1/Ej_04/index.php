
<?php
    /*
    Haz un programa que implemente una función que cuente hasta un número determinado.
    Si no se incluye un número determinado, este deberá tener un valor por defecto igual a 10.
    Además, esta función debe tener un segundo parámetro que indique de cuánto en cuánto se cuenta (de 1 en 1, de 2 en 2…). 
    La cuenta debe mostrarse en pantalla paso a paso.
    */

 



    function contar ($numCuenta, $limite = 10)
    {
        echo "Vamos a contar de $numCuenta en $numCuenta hasta que llegues a $limite que es tu limite:" . PHP_EOL;
        
        $numVeces = $limite / $numCuenta;

            for($i = 0; $i <= $limite; $i += $numCuenta)
            {
               echo "En esta cuenta llevas = $i." . PHP_EOL;
            }

        return  "Has alcanzado tu limite (" . $limite . ").". PHP_EOL 
        . "Haciendo un total de $numVeces cuentas.". PHP_EOL 
        ."Teniendo en cuenta que contabas de " . $numCuenta ." en " . $numCuenta . "."; 
    }

    echo contar(2);

?>

