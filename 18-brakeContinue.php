<?php

/*
Instrucciones de control de flujo en ciclos: `continue` y `break`

Definición:
En PHP, dentro de los ciclos de control de flujo, las instrucciones `continue` y `break` permiten modificar el flujo normal de las iteraciones de un ciclo.

1. `continue`:
   - Se utiliza para omitir el resto del código en la iteración actual y pasar directamente a la siguiente iteración.
   - Es útil cuando se desea saltar ciertos casos en un ciclo sin interrumpir su ejecución completa.
   - Ejemplo:
     for ($i = 1; $i <= 5; $i++) {
         if ($i == 3) {
             continue; // Salta esta iteración cuando $i es igual a 3
         }
         echo $i;
     }
     // Salida: 1 2 4 5

2. `break`:
   - Se utiliza para salir completamente de un ciclo, independientemente de la condición o iteraciones restantes.
   - Es útil cuando se cumple una condición específica que hace innecesario continuar con el ciclo.
   - Ejemplo:
     for ($i = 1; $i <= 5; $i++) {
         if ($i == 3) {
             break; // Detiene el ciclo cuando $i es igual a 3
         }
         echo $i;
     }
     // Salida: 1 2

Diferencia clave:
- `continue` salta a la siguiente iteración del ciclo.
- `break` termina el ciclo por completo.

Estas instrucciones son herramientas poderosas para manejar el flujo de control dentro de estructuras de repetición.
*/


# Ejemplo 1: `continue` en un ciclo `for`
echo "Ejemplo 1: `continue` en un ciclo `for`";
echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; # Salta esta iteración cuando $i es igual a 3
    }
    echo $i . " ";
}
# Salida: 1 2 4 5

# Ejemplo 2: `break` en un ciclo `for`

echo "<br>";
echo "Ejemplo 2: `break` en un ciclo `for`";
echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        break; # Detiene el ciclo cuando $i es igual a 3
    }
    echo $i . " ";
}
# Salida: 1 2

/*
Ejericios:
1. Utiliza un ciclo `for` para imprimir los números del 1 al 10, pero omite el número 7.
2. Utiliza un ciclo `while` para imprimir los números del 1 al 10, pero detente si el número es mayor a 5.
3. Utiliza un ciclo `do-while` para imprimir los números del 1 al 10, pero omite el número 3.
4. Utiliza un ciclo 'foreach' para imprimir los elementos de un arreglo de nombres, pero detente si el nombre es "Juan".
 */