<?php

// 3. Declare una variable de cada tipo: integer, double, string y boolean. Luego
// imprimirlas en la página, mediante una frase.

$stock = 45;
$precio = 50000.00;
$nombre = "Camiseta de hombre";
$disponibilidad = true; 

$disponibilidad =($disponibilidad ? "Disponible" : "Din existencia"); //se realiza con el fin de que el boolean tomo un valor como tal que sea diferente a 1 o 0
$precioDecimal = number_format($precio, 2); //sirve para formatear el float con el fin de que imprima tanto los outnos como las comas que existan en el valor

echo "Ayer fui a comprar una $nombre, me costó $$precioDecimal, quedaban $stock en stock y actualmente está $disponibilidad.";