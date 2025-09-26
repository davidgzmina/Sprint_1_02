<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #8eecffff;
            margin: 20px;
            color: #281b5cff;
        }

    </style>
</head>
<body>
    
<?php
/*
Escribir una función para verificar el grado de un/a estudiante según la nota.
Condiciones:
- Si la nota es del 60% o más, el grado debe ser Primera División.
- Si la nota está entre el 45% y el 59%, el grado debe ser Segunda División.
- Si la nota está entre el 33% y el 44%, el grado debe ser Tercera División.
- Si la nota es menor al 33%, el/la estudiante reprobará.

*/
    $nota = 75;
    $resultado = "";

    if($nota < 33){
        $resultado = "Como tu nota es del " . $nota ."% y es menor del 33%, debes repetir.";
    }
    else if($nota > 33 && $nota < 45){
        $resultado = "Como tu nota es del " . $nota ."% y esta comprendida entre el 33% y el 44%,
        tienes una cualificación de Tercera División.";
    }
    else if($nota > 44 && $nota < 59){
        $resultado = "Como tu nota es del " . $nota ."% y esta comprendida entre el 44% y el 59%,
        tienes una cualificación de Segunda División.";
    }
    else{
        $resultado = " Felicidadeees!!! como tu nota es del " . $nota ."% y es superior al 60% tienes una cualificación de Primera División!!";
    }

    echo "<h1>$resultado</h1>";

?>

</body>
</html>