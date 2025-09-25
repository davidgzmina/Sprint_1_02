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
            color: #ffffffff;
        }

    </style>
</head>
<body>



    <?php
        $saludo = "Hello, World!";
        $curso = "Aquest és el curs de PHP!!";

        echo "$saludo<br>";
        echo  "Variable con el casting de letras a mayusculas: " . strtoupper("$saludo<br>");
        echo  "Variable con el length del string: " . strlen("$saludo")."<br>";
        echo "Variable del reves: " . strrev("$saludo");


        echo "<br><h1>$saludo $curso </h1>";
    ?>    



</body>
</html>