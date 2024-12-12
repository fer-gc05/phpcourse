<?php

/*
Operadores de Asignación en PHP

Definición:
Los operadores de asignación en PHP se utilizan para asignar valores a las variables.
El operador más básico es el signo igual (`=`), que asigna el valor de la derecha a la variable de la izquierda.
Además, PHP incluye operadores de asignación compuesta que combinan una operación matemática con la asignación.

Listado de operadores de asignación:

1. Asignación básica (`=`):
   Asigna un valor a una variable.
   Ejemplo:
   $x = 10; // Asigna el valor 10 a la variable $x.

2. Asignación con suma (`+=`):
   Suma el valor de la derecha al de la variable y asigna el resultado a la variable.
   Ejemplo:
   $x = 5;
   $x += 3; // Equivale a $x = $x + 3; Salida: 8.

3. Asignación con resta (`-=`):
   Resta el valor de la derecha al de la variable y asigna el resultado a la variable.
   Ejemplo:
   $x = 10;
   $x -= 4; // Equivale a $x = $x - 4; Salida: 6.

4. Asignación con multiplicación (`*=`):
   Multiplica el valor de la variable por el de la derecha y asigna el resultado a la variable.
   Ejemplo:
   $x = 7;
   $x *= 2; // Equivale a $x = $x * 2; Salida: 14.

5. Asignación con división (`/=`):
   Divide el valor de la variable entre el de la derecha y asigna el resultado a la variable.
   Ejemplo:
   $x = 20;
   $x /= 4; // Equivale a $x = $x / 4; Salida: 5.

6. Asignación con módulo (`%=`):
   Calcula el residuo de la división de la variable entre el valor de la derecha y asigna el resultado a la variable.
   Ejemplo:
   $x = 15;
   $x %= 4; // Equivale a $x = $x % 4; Salida: 3.

7. Asignación con concatenación (`.=`):
   Concatena el valor de la derecha al valor de la variable y asigna el resultado a la variable.
   Ejemplo:
   $texto = "Hola";
   $texto .= " mundo"; // Equivale a $texto = $texto . " mundo"; Salida: Hola mundo.

Ejemplo práctico de todos los operadores:
$x = 10;
echo $x; // Asignación básica, salida: 10

$x += 5;
echo $x; // Asignación con suma, salida: 15

$x -= 3;
echo $x; // Asignación con resta, salida: 12

$x *= 2;
echo $x; // Asignación con multiplicación, salida: 24

$x /= 4;
echo $x; // Asignación con división, salida: 6

$x %= 5;
echo $x; // Asignación con módulo, salida: 1

$texto = "Hola";
$texto .= " mundo";
echo $texto; // Asignación con concatenación, salida: Hola mundo
*/

echo 'Operadores de Asignación en PHP';
echo '<br><br>';
# Ejemplo práctico de todos los operadores:
$x = 10;

echo $x; # Asignación básica, salida: 10
echo '<br><br>';

$x += 5;
echo $x; # Asignación con suma, salida: 15
echo '<br><br>';

$x -= 3;
echo $x; # Asignación con resta, salida: 12
echo '<br><br>';

$x *= 2;
echo $x; # Asignación con multiplicación, salida: 24
echo '<br><br>';

$x /= 4;
echo $x; # Asignación con división, salida: 6
echo '<br><br>';

$x %= 5;
echo $x; # Asignación con módulo, salida: 1
echo '<br><br>';

$texto = "Hola";
$texto .= " mundo";
echo $texto; # Asignación con concatenación, salida: Hola mundo