<?php

/*
El operador ternario es una forma abreviada de escribir una estructura condicional if.
La sintaxis del operador ternario es la siguiente:
(condición) ? (código a ejecutar si la condición es verdadera) : (código a ejecutar si la condición es falsa);

El operador ternario se compone de tres partes:
1. La condición que se evalúa.
2. El código que se ejecuta si la condición es verdadera.
3. El código que se ejecuta si la condición es falsa.

Ejemplo:

$edad = 18;

echo ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";

En este ejemplo, la variable $edad tiene un valor de 18. La condición $edad >= 18 se evalúa como verdadera, por lo que se imprime el mensaje "Eres mayor de edad".
*/

$edad = 18;

echo ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";

# Calcular el valor total a pagar por una compra de 5 prendas a $100 cada una. Si se compran más de 5 prendas, se aplica un descuento del 20%. Si se compran 5 o menos prendas, se aplica un descuento del 10%.
echo '<br>';
echo 'Ejemplo de operador ternario';
echo '<br>';

$prendas = 6;
$precio = 100;
$total = $prendas * $precio;
$total = ($prendas > 5) ? $total-($total * 0.2) : $total-($total * 0.1);

echo "El total a pagar es: $total";

/*
Ejercicio:

Crea una variable llamada $temperatura con un valor numérico.
Utiliza el operador ternario para imprimir un mensaje que diga "Hace frío" si la temperatura es menor o igual a 10 grados, y
"Hace calor" si la temperatura es mayor a 10 grados.
*/