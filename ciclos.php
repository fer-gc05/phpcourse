<?php

/*
Ciclos en PHP

Definición:
Los ciclos en PHP son estructuras de control que permiten repetir un bloque de código, ya sea un número determinado de veces o mientras se cumpla una condición específica.
Son fundamentales para trabajar con datos iterativos o procesos repetitivos.

Tipos de ciclos en PHP:

1. while:
   - Repite un bloque de código mientras la condición especificada sea verdadera.
   - Útil cuando no se conoce de antemano cuántas iteraciones serán necesarias.
   - Ejemplo:
     while ($contador < 10) {
         echo $contador;
         $contador++;
     }

2. do-while:
   - Similar al ciclo `while`, pero siempre se ejecuta al menos una vez, ya que la condición se evalúa al final de cada iteración.
   - Ejemplo:
     do {
         echo $contador;
         $contador++;
     } while ($contador < 10);

3. for:
   - Ideal para iteraciones con un número conocido de repeticiones.
   - Incluye inicialización, condición y actualización en su sintaxis.
   - Ejemplo:
     for ($i = 0; $i < 10; $i++) {
         echo $i;
     }

4. foreach:
   - Diseñado específicamente para recorrer arrays y objetos.
   - Fácil de usar para iterar sobre todos los elementos de una colección.
   - Ejemplo:
     $array = [1, 2, 3];
     foreach ($array as $valor) {
         echo $valor;
     }

Cada ciclo tiene su propósito y aplicación dependiendo del problema que se necesite resolver.

Ademas de esa sintaxis, los ciclos en PHP pueden usarse con una sintaxis alternativa, que consiste en utilizar las palabras clave `while`, `do`, `for` y `foreach` en minúsculas, seguidas de dos puntos `:` al final de la línea, y el uso de `endwhile`, `enddo`, `endfor` y `endforeach` para marcar el final del bloque de código.

Ejemplo de ciclo while con sintaxis alternativa:

$contador = 0;
while ($contador < 10):
    echo $contador;
    $contador++;
endwhile;

Ejemplo de ciclo do-while con sintaxis alternativa:

$contador = 0;

do:
    echo $contador;
    $contador++;

while ($contador < 10);

Ejemplo de ciclo for con sintaxis alternativa:

for ($i = 0; $i < 10; $i++):
    echo $i;

endfor;

Ejemplo de ciclo foreach con sintaxis alternativa:

$array = [1, 2, 3];
foreach ($array as $valor):
    echo $valor;

endforeach;
*/

# Ejemplo de ciclo while (Mientras)

# Inicializamos el contador
$contador = 0;
# Mientras el contador sea menor a 10
while ($contador < 10) {
    echo $contador;
    $contador++;
}

# Ejemplo de ciclo do-while (Hacer-Mientras)

# Inicializamos el contador
$contador = 0;
# Hacemos algo al menos una vez
do {
    echo $contador;
    $contador++;
} while ($contador < 10);

# Ejemplo de ciclo for (Para)

# Iteramos 10 veces
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

# Ejemplo de ciclo foreach (Para cada)

# Iteramos sobre un array
$array = [1, 2, 3];
foreach ($array as $valor) {
    echo $valor;
}

# Sintaxis alternativa de ciclos

# Ciclo while con sintaxis alternativa
$contador = 0;
while ($contador < 10):
    echo $contador;
    $contador++;
endwhile;

# Ciclo for con sintaxis alternativa

for ($i = 0; $i < 10; $i++):
    echo $i;
endfor;

# Ciclo foreach con sintaxis alternativa

$array = [1, 2, 3];
foreach ($array as $valor):
    echo $valor;
endforeach;

/*
 Ejericios:

1. Utilizando un ciclo while, imprimir los números del 1 al 100. Y luego de forma descendente los números del 100 al 1.
2. Utilizando un ciclo for, imprimir los números pares del 1 al 50. Y luego de forma descendente los números impares del 50 al 1.
3. Utilizando un ciclo foreach, imprimir los valores de un array asociativo con las claves "nombre" y "edad".

Pista: Recuerden usar los operadores de incremento y decremento para modificar las variables de control en cada iteración.
 */