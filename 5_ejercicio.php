<?php

// 5. Generar un valor aleatorio entre 20 y 25. Luego imprimir en español el número
// (Ejemplo. Si se genera el 21 luego mostrar en la página el string “Veintiuno”). Para
// ver si una variable es igual a cierto valor debemos plantear una condición similar a:
// If ($valor==21) {
// //algoritmo
// }

$numeroRandom = rand(20,25);
echo $numeroRandom;
echo "<br>"; 
if ($numeroRandom==20) {
    echo "veinte";
}
else if ($numeroRandom==21) {
    echo "veintiuno";
}
else if ($numeroRandom==22) {
    echo "veintidos";
}
else if ($numeroRandom==23) {
    echo "veintitrés";
}
else if ($numeroRandom==24) {
    echo "veinticuatro";
} else{
    echo "veinticinco";
}