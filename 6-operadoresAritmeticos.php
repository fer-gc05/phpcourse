<?php

/*
Los operadores aritméticos en PHP

Definición:
Los operadores aritméticos en PHP se utilizan para realizar operaciones matemáticas sobre números, como suma, resta, multiplicación, división y más.
Son fundamentales para manipular valores numéricos en cálculos y expresiones.

Listado de operadores aritméticos:
1. Suma (`+`): Suma dos valores.
   Ejemplo: $resultado = $a + $b;

2. Resta (`-`): Resta el segundo valor del primero.
   Ejemplo: $resultado = $a - $b;

3. Multiplicación (`*`): Multiplica dos valores.
   Ejemplo: $resultado = $a * $b;

4. División (`/`): Divide el primer valor entre el segundo.
   Nota: Si el divisor es 0, genera un error.
   Ejemplo: $resultado = $a / $b;

5. Módulo (`%`): Devuelve el residuo de la división entre dos valores.
   Ejemplo: $resultado = $a % $b;

6. Exponenciación (`**`): Eleva un valor a la potencia de otro.
   Ejemplo: $resultado = $a ** $b;

Ejemplo práctico:
$a = 10;
$b = 2;

echo $a + $b; // Salida: 12
echo $a - $b; // Salida: 8
echo $a * $b; // Salida: 20
echo $a / $b; // Salida: 5
echo $a % $b; // Salida: 0
echo $a ** $b; // Salida: 100

Para la realizacion o aplicacion de estos operadores debemos tener en cuenta cierta gerarquiaa de operadores, la cual es la siguiente:
1. Paréntesis `()`
2. Exponenciación `**`
3. Multiplicación `*`, División `/`, Módulo `%`
4. Suma `+`, Resta `-`
*/

# Ejemplo de uso de operadores aritméticos básicos
$a = 10;
$b = 2;

$suma = $a + $b;

# Suma: agrega los valores de $a y $b.
echo 'Suma: ';
echo '<br>';
echo $a + $b; # Salida: 12
echo '<br><br>';
# Resta: calcula la diferencia entre $a y $b.
echo 'Resta: ';
echo '<br>';
echo $a - $b; # Salida: 8
echo '<br><br>';
# Multiplicación: multiplica $a por $b.
echo 'Multiplicación: ';
echo '<br>';
echo $a * $b; # Salida: 20
echo '<br><br>';
# División: divide $a entre $b.
echo 'División: ';
echo '<br>';
echo $a / $b; # Salida: 5
echo '<br><br>';
# Módulo: devuelve el residuo de la división de $a entre $b.
echo 'Módulo: ';
echo '<br>';
echo $a % $b; # Salida: 0
echo '<br><br>';
# Exponenciación: eleva $a a la potencia de $b.
echo 'Exponenciación: ';
echo '<br>';
echo $a ** $b; # Salida: 100
echo '<br><br>';
# --------------------------------------------------

# Ejemplo aplicando la jerarquía de operadores

# Ejemplo 1: Prioridad de la multiplicación sobre la suma.
# La multiplicación (3 * 4) se resuelve primero, luego se suma 2.
echo 'Ejemplo 1: ';
echo '<br>';
echo 'Prioridad de la multiplicación sobre la suma: ';
echo '<br>';
echo 2 + 3 * 4; # Salida: 14
echo '<br><br>';

# Ejemplo 2: Uso de paréntesis para cambiar la prioridad.
# Se resuelve primero (2 + 3), luego se multiplica por 4.
echo 'Ejemplo 2: ';
echo '<br>';
echo 'Uso de paréntesis para cambiar la prioridad: ';
echo (2 + 3) * 4; # Salida: 20
echo '<br><br>';

# Ejemplo 3: Exponenciación tiene mayor prioridad que multiplicación.
# Primero se resuelve 4 ** 2 (16), luego se multiplica por 3 y se suma 2.
echo 'Ejemplo 3: ';
echo '<br>';
echo 'Exponenciación tiene mayor prioridad que multiplicación: ';
echo 2 + 3 * 4 ** 2; # Salida: 50
echo '<br><br>';

# Ejemplo 4: Uso de paréntesis para cambiar el orden de evaluación.
# Primero se resuelve (2 + 3 * 4), luego se eleva al cuadrado.
echo 'Ejemplo 4: ';
echo '<br>';
echo 'Uso de paréntesis para cambiar el orden de evaluación: ';
echo (2 + 3 * 4) ** 2; # Salida: 100
echo '<br><br>';

# Ejemplo 5: Combinación de exponenciación, multiplicación, y división.
# Primero 4 ** 2 (16), luego 16 * 3 (48), después 48 / 2 (24) y finalmente 2 + 24 (26).
echo 'Ejemplo 5: ';
echo '<br>';
echo 'Combinación de exponenciación, multiplicación, y división: ';
echo 2 + 3 * 4 ** 2 / 2; # Salida: 26
echo '<br><br>';

# Ejemplo 6: Uso de paréntesis para cambiar la prioridad.
# Primero se resuelve (2 + 3 * 4 ** 2), luego el resultado se divide entre 2.
echo 'Ejemplo 6: ';
echo '<br>';
echo 'Uso de paréntesis para cambiar la prioridad: ';
echo (2 + 3 * 4 ** 2) / 2; # Salida: 25
echo '<br><br>';

# Ejemplo 7: Combinación más compleja con paréntesis.
# Primero 4 ** 2 (16), luego 16 * 3 (48), después 48 / (2 + 2) (12) y finalmente 2 + 12 (13).
echo 'Ejemplo 7: ';
echo '<br>';
echo 'Combinación más compleja con paréntesis: ';
echo 2 + 3 * 4 ** 2 / (2 + 2); # Salida: 13
echo '<br><br>';

# Ejemplo 8: Uso de paréntesis para ajustar el orden de operaciones.
# Primero (2 + 3 * 4 ** 2), luego el resultado se divide entre (2 + 2).
echo 'Ejemplo 8: ';
echo '<br>';
echo 'Uso de paréntesis para ajustar el orden de operaciones: ';
echo (2 + 3 * 4 ** 2) / (2 + 2); # Salida: 12.5


# Los ejemplos no coinciden, por favor correguir y agregar más ejemplos:
