<?php

/*
Los operadores de comparación en PHP

Definición:
Los operadores de comparación en PHP se utilizan para comparar dos valores y determinar si son iguales, diferentes, mayores, menores, etc.
Son fundamentales para controlar el flujo de un programa y tomar decisiones basadas en condiciones.

Listado de operadores de comparación:

1. Igual (`==`): Comprueba si dos valores son iguales.
   Ejemplo: $a == $b;

2. Idéntico (`===`): Comprueba si dos valores son iguales y del mismo tipo.

3. Diferente (`!=` o `<>`): Comprueba si dos valores son diferentes.
   Ejemplo: $a != $b;

4. No idéntico (`!==`): Comprueba si dos valores son diferentes o no del mismo tipo.

5. Mayor que (`>`): Comprueba si el primer valor es mayor que el segundo.
   Ejemplo: $a > $b;

6. Menor que (`<`): Comprueba si el primer valor es menor que el segundo.
    Ejemplo: $a < $b;

7. Mayor o igual que (`>=`): Comprueba si el primer valor es mayor o igual que el segundo.
    Ejemplo: $a >= $b;

8. Menor o igual que (`<=`): Comprueba si el primer valor es menor o igual que el segundo.
*/

# Ejemplo de uso de operadores de comparación

$a = 10;
$b = 5;

# Igual: comprueba si $a es igual a $b.
echo 'Igual: ';
echo '<br>';
var_dump($a == $b); # Salida: false

# Idéntico: comprueba si $a es igual a $b y del mismo tipo.
echo '<br>';
echo 'Idéntico: ';
echo '<br>';
var_dump($a === $b); # Salida: false

# Diferente: comprueba si $a es diferente de $b.
echo '<br>';
echo 'Diferente: ';
echo '<br>';
var_dump($a != $b); # Salida: true

# No idéntico: comprueba si $a es diferente de $b o no del mismo tipo.
echo '<br>';
echo 'No idéntico: ';
echo '<br>';
var_dump($a !== $b); # Salida: true

# Mayor que: comprueba si $a es mayor que $b.
echo '<br>';
echo 'Mayor que: ';
echo '<br>';
var_dump($a > $b); # Salida: true

# Menor que: comprueba si $a es menor que $b.
echo '<br>';
echo 'Menor que: ';
echo '<br>';
var_dump($a < $b); # Salida: false

# Mayor o igual que: comprueba si $a es mayor o igual que $b.
echo '<br>';
echo 'Mayor o igual que: ';
echo '<br>';
var_dump($a >= $b); # Salida: true

# Menor o igual que: comprueba si $a es menor o igual que $b.
echo '<br>';
echo 'Menor o igual que: ';
echo '<br>';
var_dump($a <= $b); # Salida: false
