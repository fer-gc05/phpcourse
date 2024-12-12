<?php

/*
* Operadores Lógicos en PHP
*
* Estos operadores se utilizan para combinar expresiones booleanas y obtener un resultado booleano.
*
* - AND (&&): Devuelve true si ambas expresiones son verdaderas.
*   Ejemplo: if ($a > 5 && $b < 10) // Ambas condiciones deben cumplirse

* - OR (||): Devuelve true si al menos una expresión es verdadera.
*   Ejemplo: if ($a == 0 || $b == 0) // Solo una condición debe cumplirse

* - XOR: Devuelve true si una y solo una expresión es verdadera.
*   Ejemplo: if ($a > 5 xor $b < 10) // Solo una condición puede ser verdadera

* - NOT (!): Invierte el valor booleano.
*   Ejemplo: if (!$resultado) // Si $resultado es falso, entonces...

* Estos operadores son fundamentales para crear expresiones condicionales complejas y controlar el flujo de ejecución de tu código.
*/

$var1 = 12;
$var2 = 17;

var_dump($var1 == 12 && $var2== 17);

var_dump($var1 == 12 || $var2== 17);

var_dump(!($var1 == 12 && $var2== 17));

