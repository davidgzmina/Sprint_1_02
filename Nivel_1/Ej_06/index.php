<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 nivel 1</title>

    <style>
        body {
            
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            height: 100vh; 
            display: flex;
            justify-content: center; 
            align-items: center;     
            }

        
        h1{
            color: white;
            font-size:80px;
        }

    </style>
</head>
<body>
<?php    
/*
¡Charlie me mordió el dedo! Charlie te morderá el dedo exactamente el 50% del tiempo.
Escribe la función isBitten() que devuelva TRUE con un 50% de probabilidad y FALSE en caso contrario.

 tip funcion rand ()

*/

$dedoMordido = rand(1,2);


function isBitten ($dedoMordido){
    if ($dedoMordido == 1){
        return "Charlie te ha mordido el dedo!!!";
    }
    else{
        return "Charlie no te ha mordido el dedo, esta vez...";
    }
    
} 

$resultado = isBitten($dedoMordido);

echo "<h1>$resultado</h1>";



?>
</body>
</html>