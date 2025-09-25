<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0e2424ff;
            margin: 20px;
        }
        h1, h2, h3 {
            color: #ffffffff;
        }
    </style>
</head>
<body>



    <?php
        const NOMBRE="DAVID";
        $apellido = "Gonzalez";
        $edad = 30;
        $mayorEdad = true;
        $altura = 1.72;

         echo "<h1>Hola mi nombre es: " . NOMBRE . " ." ."</h1>";

         echo "<h2> Mi apellido es $apellido , tengo $edad años y mido $altura . </h2>";

        if($mayorEdad>=18){
            echo "<h3> Y soy mayor de edad. </h3>";
        } else {
            echo "<h3> Y no soy mayor de edad. </h3>";
        }
    
    
    
    
    
    
    ?>    



</body>
</html>