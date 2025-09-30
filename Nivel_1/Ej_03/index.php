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
        h2{
            color: red;
        }

    </style>
</head>
<body>

    <?php
        $X = 1;
        $Y = 2;

        $N = 1.5;
        $M = 2.5;

        $a = "10";
        $b = "5";

        $operacion="suma";
        $resultado;
       
        // Parte A
        echo "El valor de la variable X es = $X y el valor de la variable Y es = $Y. <br>";
        echo "La SUMA de las variables X e Y es de = " . $X + $Y . "<br>";
        echo "La RESTA de las variables X e Y es de = " . $X - $Y . "<br>";
        echo "El PRODUCTO de las variables X e Y es de = " . $X * $Y . "<br>";
        echo "El MODULO de las variables X e Y es de = " . $X / $Y . "<br>";

        echo  "<br>El valor de la variable N es = $N y el valor de la variable M es = $M. <br>";
        echo "La SUMA de las variables N y M es de = " . $N + $M . "<br>";
        echo "La RESTA de las variables N y M es de = " . $N - $M . "<br>";
        echo "El PRODUCTO de las variables N y M es de = " . $N * $M . "<br>";
        echo "El MODULO de las variables N y M es de = " . $N / $M . "<br>";

        echo "<br>El DOBLE de todas las variables es: X = " . $X*2 . ", Y = " . $Y*2 . ", N = " . $N*2 
        . ", M = " . $M*2 . ".<br>" ;
        echo "La SUMA de todas variables es de = " . $N + $M + $X + $Y . "<br>";
        echo "El PRODUCTO de todas variables es de = " . $N * $M * $X * $Y . "<br>";

        // Parte B
        function calculadora($a, $b, $operacion){
            $resultado = match($operacion){
                "suma"=> "El resultado de la suma es = " . $a + $b,
                "resta"=> "El resultado de la resta es = " . $a - $b,
                "multiplicacion"=>"El resultado de la multiplicacion es = " .  $a * $b,
                "division"=> "El resultado de la division es = " . $a / $b,
                default=> "Esa operacion no es posible",
            };
            return $resultado;
        }
        $resultado = calculadora($a, $b, $operacion);

        echo "<h2>$resultado</h2>";


        ?>


</body>
</html>