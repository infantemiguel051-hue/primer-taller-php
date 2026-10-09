<?php

// 1. Realice una aplicación en php que nos permita determinar cuál es la variable
// mayor, la variable del medio y la menor, también si todas son iguales. Además,
// decir si dos de las variables son iguales si la que queda es mayor o menor, se
// debe utilizar el condicional if, else if o else.


$a = rand(1,100);
$b = rand(1,100);
$c = rand(1,100);

echo "Valores ingresados: $a, $b, $c <br><br>";

// determinar si las variables son iguales
if($a === $b && $b === $c) {
    echo "Los 3 valores son iguales";
}

// determinar si 2 variables son iguales y la otra es mayor o menor
else if ($a === $b && $c > $a) { //se compara la "a" con la "b" para saber si son iguales y luego la "c" se compara con la "a" para saber si esta es mayor o menor a las que son iguales 
    echo "La variable 1:({$a}) y 2:({$b}) son iguales y la variable 3:({$c}) es mayor a las demás";
}
else if ($a === $b && $c < $a) {
    echo "La variable 1:({$a}) y 2:({$b}) son iguales y la variable 3:({$c}) es menor a las demás";
}


else if ($a === $c && $b > $a) {
    echo "La variable 1:({$a}) y 3:({$c}) son iguales y la variable 2:({$b}) es mayor a las demás";
}
else if ($a === $c && $b < $a) {
    echo "La variable 1:({$a}) y 3:({$c}) son iguales y la variable 2:({$b}) es menor a las demás";
}


else if ($b === $c && $a > $b) {
    echo "La variable 2:({$b}) y 3:({$c}) son iguales y la variable 1:({$a}) es mayor a las demás";
}
else if ($b === $c && $a < $b) {
    echo "La variable 2:({$b}) y 3:({$c}) son iguales y la variable 1:({$a}) es menor a las demás";
}


// determinar cuál es la variable Mayor, cúal es la del Medio y cuál es la Menor
else if ($a > $b  && $b > $c) { // se hace la comparacion de si "a" es mayor que "b" y luego si "b" es mayor que "c" con el fin de determinar cuál es la menor, la del medio y la mayor
    echo "La variable 1:({$a}) es la mayor, la variable 2:({$b}) es la del medio y la variable 3:({$c}) es la menor";
}
else if ($a > $c  && $c > $b) {
    echo "La variable 1:({$a}) es la mayor, la variable 3:({$c}) es la del medio y la variable 2:({$b}) es la menor";
}
else if ($b > $a && $a > $c) {
    echo "La variable 2:({$b}) es la mayor, la variable 1:({$a}) es la del medio y la variable 3:({$c}) es la menor";
}
else if ($b > $c && $c > $a){
    echo "La variable 2:({$b}) es la mayor, la variable 3:({$c}) es la del medio y la variable 1:({$a}) es la menor";
}
else if($c > $a && $a > $b){
    echo "La variable 3:({$c}) es la mayor, la variable 1:({$a}) es la del medio y la variable 2:({$a}) es la menor";

} else{
    echo "La variable 3:({$c}) es la mayor, la variable 2:({$b}) es la del medio y la variable 1:({$a}) es la menor";  
}