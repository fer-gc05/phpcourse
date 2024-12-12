<?php

/*
La expresion match es una forma de comparar una expresion con varias opciones
y ejecutar un bloque de codigo dependiendo de la opcion que coincida con la expresion

La expresion match es similar a la expresion switch, pero con algunas diferencias

1. La expresion match es mas segura que la expresion switch
2. La expresion match no requiere la palabra break
3. La expresion match devuelve un valor, no ejecuta un bloque de codigo
4. La expresion match no soporta rangos de valores
5. La expresion match no soporta condiciones logicas
6. La expresion match no soporta condiciones de tipo

Sintaxis
match (expresion) {
    valor1 => expresion1,
    valor2 => expresion2,
    valor3 => expresion3,
    ...
}
*/

$a = 1;

$x = 10;
$y = 20;
$z = 30;
 # Calcula el resultado en base a la comprobacion de la variable $a
$resultado = match ($a) {
$x => "El valor de a es igual a x",
$y => "El valor de a es igual a y",
$z => "El valor de a es igual a z",
default => "El valor de a no coincide con x, y o z",
};

echo $resultado;

/*
Ejericio:

Calcular si una persona es mayor de edad o menor de edad usando la expresion match

*/
