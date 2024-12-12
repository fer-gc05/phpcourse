<?php

/*
PHP cuenta con un conjunto amplio de funciones diseñadas para realizar tareas comunes de manera sencilla y eficiente.
Estas funciones están organizadas en diversas categorías, como funciones de manejo de cadenas, matemáticas, fechas y horas, archivos, entre otras.

Para utilizar una función en PHP, simplemente escribimos el nombre de la función seguido de paréntesis, proporcionando los argumentos necesarios si la función los requiere.

A continuación, se listan algunas de las funciones más comunes y útiles en PHP:

-strlen(): Devuelve la longitud de una cadena de texto.
-strrev(): Invierte el orden de los caracteres en una cadena de texto.
-strtoupper(): Convierte una cadena de texto a mayúsculas.
-strtolower(): Convierte una cadena de texto a minúsculas.
-ucfirst(): Convierte el primer carácter de una cadena de texto a mayúscula.
-ucwords(): Convierte el primer carácter de cada palabra de una cadena de texto a mayúscula.
-str_replace(): Reemplaza una cadena de texto con otra en una cadena dada.
-substr(): Devuelve una porción específica de una cadena de texto.
-explode(): Divide una cadena de texto en un array utilizando un delimitador.
-implode(): Une los elementos de un array en una cadena de texto.
-is_numeric(): Verifica si una variable es un número o una cadena numérica.
-is_string(): Verifica si una variable es una cadena de texto.
-is_array(): Verifica si una variable es un array.
-is_bool(): Verifica si una variable es un valor booleano (`true` o `false`).
-is_int(): Verifica si una variable es un número entero.
-is_float(): Verifica si una variable es un número de punto flotante.
-empty(): Verifica si una variable está vacía (null o sin valor).
-isset(): Verifica si una variable está definida y no es nula.
-var_dump(): Muestra información detallada sobre una variable, como su tipo y valor.
-print_r(): Muestra información legible sobre una variable, especialmente útil para arrays.
-die(): Imprime un mensaje y termina la ejecución del script.
-exit(): Similar a `die()`, pero también termina el script.
-header(): Envía cabeceras HTTP para redirecciones, control de cookies, o ajustes de encabezado.
-session_start(): Inicia una sesión para almacenar datos persistentes entre solicitudes.
-session_destroy(): Destruye una sesión activa.
-session_unset(): Elimina todas las variables de sesión.
-session_id(): Devuelve el ID de la sesión actual.
-session_name(): Devuelve el nombre de la sesión actual.
-session_regenerate_id(): Regenera el ID de sesión actual para aumentar la seguridad.
-session_save_path(): Establece o devuelve la ruta donde se almacenan los datos de la sesión.
-session_status(): Devuelve el estado actual de la sesión.

Estas funciones optimizan el desarrollo en PHP, mejorando la legibilidad, eficiencia y facilitando la resolución de tareas comunes.
*/

$cadena = "Hola, mundo!";

# strlen(): Devuelve la longitud de una cadena de texto.
echo 'La longitud de la cadena es: ' . strlen($cadena); // Salida: 12
echo '<br><br>';

# strrev(): Invierte el orden de los caracteres en una cadena de texto.
echo 'La cadena invertida es: ' . strrev($cadena); // Salida: !odnum ,aloH
echo '<br><br>';

# strtoupper(): Convierte una cadena de texto a mayúsculas.
echo 'La cadena en mayúsculas es: ' . strtoupper($cadena); // Salida: HOLA, MUNDO!
echo '<br><br>';

# strtolower(): Convierte una cadena de texto a minúsculas.
echo 'La cadena en minúsculas es: ' . strtolower($cadena); // Salida: hola, mundo!
echo '<br><br>';

# ucfirst(): Convierte el primer carácter de una cadena de texto a mayúscula.
echo 'La cadena con el primer carácter en mayúscula es: ' . ucfirst($cadena); // Salida: Hola, mundo!
echo '<br><br>';

# ucwords(): Convierte el primer carácter de cada palabra de una cadena de texto a mayúscula.
$cadena2 = 'hola mundo';
echo 'La cadena con el primer carácter de cada palabra en mayúscula es: ' . ucwords($cadena2); // Salida: Hola Mundo
echo '<br><br>';

# str_replace(): Reemplaza una cadena de texto con otra en una cadena dada.
$cadena3 = 'Hola, mundo!';
$nuevaCadena = str_replace('mundo', 'amigo', $cadena3);
echo 'La nueva cadena es: ' . $nuevaCadena; // Salida: Hola, amigo!
echo '<br><br>';

# substr(): Devuelve una porción específica de una cadena de texto.
$cadena4 = 'Hola, mundo!';
$subcadena = substr($cadena4, 0, 4);
echo 'La subcadena es: ' . $subcadena; // Salida: Hola
echo '<br><br>';

# explode(): Divide una cadena de texto en un array utilizando un delimitador.
$cadena5 = 'Hola, mundo!';
$palabras = explode(', ', $cadena5);
echo 'Las palabras son: ';
print_r($palabras); // Salida: Array ( [0] => Hola [1] => mundo! )
echo '<br><br>';

# implode(): Une los elementos de un array en una cadena de texto.
$palabras2 = ['Hola', 'mundo!'];
$cadena6 = implode(', ', $palabras2);
echo 'La cadena es: ' . $cadena6; // Salida: Hola, mundo!
echo '<br><br>';

# is_numeric(): Verifica si una variable es un número o una cadena numérica.
$variable1 = '1234';
echo 'is_numeric: ' . (is_numeric($variable1) ? 'Sí' : 'No'); // Salida: Sí
echo '<br><br>';

# is_string(): Verifica si una variable es una cadena de texto.
$variable2 = 1234;
echo 'is_string: ' . (is_string($variable2) ? 'Sí' : 'No'); // Salida: No
echo '<br><br>';

# is_array(): Verifica si una variable es un array.
$variable3 = [1, 2, 3];
echo 'is_array: ' . (is_array($variable3) ? 'Sí' : 'No'); // Salida: Sí
echo '<br><br>';

# is_bool(): Verifica si una variable es un valor booleano.
$variable4 = true;
echo 'is_bool: ' . (is_bool($variable4) ? 'Sí' : 'No'); // Salida: Sí
echo '<br><br>';

# is_int(): Verifica si una variable es un número entero.
$variable5 = 123;
echo 'is_int: ' . (is_int($variable5) ? 'Sí' : 'No'); // Salida: Sí
echo '<br><br>';

# is_float(): Verifica si una variable es un número de punto flotante.
$variable6 = 12.34;
echo 'is_float: ' . (is_float($variable6) ? 'Sí' : 'No'); // Salida: Sí
echo '<br><br>';

# empty(): Verifica si una variable está vacía (null o sin valor).
$variable7 = '';
echo 'empty: ' . (empty($variable7) ? 'Sí' : 'No'); // Salida: Sí
echo '<br><br>';

# isset(): Verifica si una variable está definida y no es nula.
$variable8 = 'definida';
echo 'isset: ' . (isset($variable8) ? 'Sí' : 'No'); // Salida: Sí
echo '<br><br>';

# var_dump(): Muestra información detallada sobre una variable.
$variable9 = [1, 2, 3];
echo 'var_dump: ';
var_dump($variable9); // Salida: muestra detalles del array [1, 2, 3]
echo '<br><br>';

# print_r(): Muestra información legible sobre una variable, especialmente útil para arrays.
echo 'print_r: ';
print_r($variable9); // Salida: muestra un formato legible del array
echo '<br><br>';