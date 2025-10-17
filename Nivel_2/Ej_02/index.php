
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
/*Sobre el ejercicio 2, has pensado en usar algún array para mejorarlo?  La variable "$partidas" guarda partidas o el número de partidas? 
Por otra parte, hace falta que hagas 3 veces return de la variable $rango?*/



$partidas =  [950,2500,4500];

function calcularPuntuacion($partidas)
{

    $puntuacionPartidas = array_sum($partidas);

    return $puntuacionPartidas;

}

function calcularMedia($puntuacionPartidas)
{
    $numPartidas = 3;
    $mediaPartidas = $puntuacionPartidas /$numPartidas;

    return $mediaPartidas;
}

function clasificarJugador($puntuacionPartidas)
{

    $rango = "";

    if($puntuacionPartidas>8000)
    {
       $rango = "Profesional"; 
    }
    else if ($puntuacionPartidas<=8000 && $puntuacionPartidas>=4000)
    {
        $rango = "Intermedio";
    }
    else
    {
        $rango = "Principiante";
    }

    return $rango; 

}

$puntuacionPartidas = calcularPuntuacion($partidas);
$mediaPartidas = calcularMedia($puntuacionPartidas);
$rango = clasificarJugador($puntuacionPartidas);



$resultado = "Rango: $rango" . PHP_EOL . "Puntos totales: $puntuacionPartidas.". PHP_EOL . "Media por partida: $mediaPartidas." . PHP_EOL . 
"Resultado partida 1: $partidas[0]." . PHP_EOL .
"Resultado partida 2: $partidas[1]." . PHP_EOL .
"Resultado partida 3: $partidas[2].";


echo $resultado;

?>
