<?php

/*
Tipo de datos en php:

1. Booleanos(boolean): Son aquellos que pueden tener dos valores, verdadero o falso. En php se representan con las palabras reservadas 'true' y 'false':
   constante true: Representa el valor verdadero(1).
   constante false: Representa el valor falso(0).

2.Enteros(integer): Son aquellos que representan números enteros, positivos o negativos. En php se representan con la palabra reservada 'int' o 'integer':
    10, -10, 0, 1000, -1000.

3. Flotantes(float, double): Son aquellos que representan números decimales, positivos o negativos. En php se representan con la palabra reservada 'float' o 'double':
    10.5, -10.5, 0.5, 1000.5, -1000.5.

4. Cadenas(string): Son aquellos que representan texto. En php se representan con la palabra reservada 'string':
    'Hola mundo', 'Hola par de cachonas', 'Hay que aprender a construir app web con php'.
 */

# Ejemplo de booleanos
echo 'Ejemplo de booleanos';
echo '<br>';
echo true;
$verdadero = true;
$falso = false;
echo '<br><br>';
var_dump($falso); # Con la función var_dump() se puede ver el tipo de dato de una variable
echo '<br><br>';


# Ejemplo de enteros
echo '<br><br>';
echo 'Ejemplo de enteros';
echo '<br>';
$entero = 19;
echo '<br>';

echo '<br>';
var_dump($entero); # Con la función var_dump() se puede ver el tipo de dato de una variable
echo '<br>';
$negativo = -20;
echo '<br>';
var_dump($negativo); # Con la función var_dump() se puede ver el tipo de dato de una variable

# Ejemplo de flotantes

echo '<br>';
echo 'Ejemplo de flotantes';
echo '<br>';
echo 10.5;
echo '<br>';
var_dump(10.5); # Con la función var_dump() se puede ver el tipo de dato de una variable
echo '<br>';
echo -10.5;
echo '<br>';
var_dump(-10.5); # Con la función var_dump() se puede ver el tipo de dato de una variable

# Ejemplo de cadenas
echo '<br>';
echo 'Ejemplo de cadenas';
echo '<br>';
echo 'Hola mundo';
echo '<br>';
var_dump('Hola mundo'); # Con la función var_dump() se puede ver el tipo de dato de una variable