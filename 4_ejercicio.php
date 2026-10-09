<?php

// 4. Definir tres variables enteras. Luego definir un string que incorpore dichas
// variables y las sustituya en tiempo de ejecución. Recordar que una variable se
// sustituye cuando el string está encerrado por comillas dobles:

$dia = 20;
$mes = 01;
$año = 2009;

// echo "$dia, $mes, $año";
// echo "<br>";

$texto = "Mi fecha de nacimiento es el $dia/$mes/$año";
echo $texto;

