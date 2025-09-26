<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #058160ff;
            margin: 20px;
            color: #ffffffff;
        }

    </style>
</head>
<body>
    <?php
    /*
    Haz un programa que implemente una función que cuente hasta un número determinado.
    Si no se incluye un número determinado, este deberá tener un valor por defecto igual a 10.
    Además, esta función debe tener un segundo parámetro que indique de cuánto en cuánto se cuenta (de 1 en 1, de 2 en 2…). 
    La cuenta debe mostrarse en pantalla paso a paso.
    */
        

        $limite = 10;
        $numCuenta = 2;
        $numVeces = $limite / $numCuenta;

       
        $resultado = "Has alcanzado tu limite. Haciendo un total de $numVeces cuentas.";

        echo "<h1>Vamos a contar de $numCuenta en $numCuenta hasta que llegues a $limite que es tu limite.<br></h1>";

            for($i = 0; $i <= $limite; $i += $numCuenta){

                echo "En esta cuenta llevas = $i.<br>";

            }
             


        echo "<h2>$resultado</h2>";


    ?>

</body>
</html>