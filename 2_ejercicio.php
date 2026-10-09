<?php

// 2. Sabiendo que la función RAND nos retorna un valor aleatorio entre un rango de
// dos enteros:
// $numero = rand(1,100);
// Declare la variable $numero en la cual se almacenará un valor que se ha
// generado en forma aleatoria entre 1 y 100. Hacer un programa que lo muestre por
// pantalla el valor generado. Mostrar además si es menor o igual a 50 o si es mayor.
// Para imprimir el contenido de una variable también utilizamos el comando ECHO

$numero = rand(1,100);

echo "el número aleatorio es: $numero .<br>";

if($numero < 50) {
    echo "El número generado aleatoriamente es Menor a 50";
} else if($numero == 50){
    echo "El número generado aleatoriamente es Igual a 50";
} else {
     echo "El número generado aleatoriamente es Mayor a 50";
}