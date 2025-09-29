<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint_01_tema_02_Nv_2_ej_02</title>

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
Imagina que estás programando parte de la lógica de la clasificación de puntos de un juego.
En este programa necesitamos introducir 3 puntuaciones diferentes (las puntuaciones están entre 0 y 9999). 
De estas puntuaciones necesitaremos:
- Su suma
- Su media
- La clasificación. Siendo "Principiante" menor de 4000, "Intermedio" menor de 8000 y "Profesional" el resto.
Piensa en hacer más de una función para resolver este problema.

*/

$partidas = 3;
$partida1 = 950;
$partida2 = 2500;
$partida3 = 4500;

function calcularPuntuacion($partida1,$partida2,$partida3){

    $puntuacionPartidas = $partida1 + $partida2 + $partida3;

    return $puntuacionPartidas;

}

function calcularMedia($puntuacionPartidas,$partidas){

     $mediaPartidas = $puntuacionPartidas /$partidas;

     return $mediaPartidas;
}

function clasificarJugador($puntuacionPartidas){

    $rango = "";

    if($puntuacionPartidas>8000){
       $rango = "Profesional";
       return $rango; 
    }
    else if ($puntuacionPartidas<=8000 && $puntuacionPartidas>=4000){
        $rango = "Intermedio";
        return $rango; 
    }
    else{
        $rango = "Principiante";
        return $rango; 
    }


}

$puntuacionPartidas = calcularPuntuacion($partida1,$partida2,$partida3);
$mediaPartidas = calcularMedia($puntuacionPartidas,$partidas);
$rango = clasificarJugador($puntuacionPartidas);



$resultado = "Rango: $rango. <br> Puntos totales: $puntuacionPartidas. <br>  Media por partida: $mediaPartidas.<br>
Resultado partida 1: $partida1.<br>
Resultado partida 2: $partida2.<br>
Resultado partida 3: $partida3.<br>";


echo $resultado;

?>
</body>
</html>