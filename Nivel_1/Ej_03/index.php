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
        $X = 1;
        $Y = 2;

        $N = 1.5;
        $M = 2.5;

       

        echo  " El valor de la variable X es = $X y el valor de la variable Y es = $Y. <br>";
        echo "La SUMA de las variables X e Y es de = " . $X + $Y . "<br>";
        echo "La RESTA de las variables X e Y es de = " . $X - $Y . "<br>";
        echo "El PRODUCTO de las variables X e Y es de = " . $X * $Y . "<br>";
        echo "El MODULO de las variables X e Y es de = " . $X % $Y . "<br>";

        echo  "<br>El valor de la variable N es = $N y el valor de la variable M es = $M. <br>";
        echo "La SUMA de las variables N y M es de = " . $N + $M . "<br>";
        echo "La RESTA de las variables N y M es de = " . $N - $M . "<br>";
        echo "El PRODUCTO de las variables N y M es de = " . $N * $M . "<br>";
        echo "El MODULO de las variables N y M es de = " . $N % $M . "<br>";

        echo "<br>El DOBLE de todas las variables es: X = " . $X*2 . ", Y = " . $Y*2 . ", N = " . $N*2 
        . ", M = " . $M*2 . ".<br>" ;
        echo "La SUMA de todas variables es de = " . $N + $M + $X + $Y . "<br>";
        echo "El PRODUCTO de todas variables es de = " . $N * $M * $X * $Y . "<br>";
        
        
        // Comprobar que se reciben los argumentos necesarios
        if ($argc != 4) {
            echo "Uso: php calculadora.php <num1> <num2> <operacion>\n";
            echo "Operaciones permitidas: suma, resta, multiplicacion, division\n";
            exit(1);
        }

        // Capturar los argumentos
        $num1 = $argv[1];
        $num2 = $argv[2];
        $operacion = strtolower($argv[3]);

        // Definir la función
        function calcular($a, $b, $operacion) {
            switch ($operacion) {
                case "suma":
                    return $a + $b;
                case "resta":
                    return $a - $b;
                case "multiplicacion":
                    return $a * $b;
                case "division":
                    if ($b == 0) {
                        return "Error: no se puede dividir por cero.";
                    }
                    return $a / $b;
                default:
                    return "Operación no válida.";
            }
        }

        // Mostrar el resultado
        $resultado = calcular($num1, $num2, $operacion);
        echo "Resultado: $resultado\n";
        ?>




       
      



</body>
</html>