<?php

/*
 Una constante es un identificador que representa un valor que no puede cambiar durante la ejecución del script.
 Una constante corresponde a una longitud fija de un area reservada para alamacenar valores fijos.

Ejemplo de constantes
Valor de pi = 3.1416
Un DNI = 12345678

   Como reglas para definir constantes tenemos:

    1. El nombre de una constante sigue las mismas reglas que el nombre de una variable
    2. Por defecto, las constantes son sensibles a mayúsculas y minúsculas
    3. Por convención, los identificadores de las constantes se escriben en mayúsculas
    4. Para definir una constante se usa la función define().
       Apartir de php 5.3 se puede usar la palabra reservada const.
*/

# Ejemplo de constantes

# Definiendo una constante con la función define()


#define('nombre de la constante', valor de la constante);
# Constante para guardar un nombre
define('NOMBRE', 'Juan Perez');

# Constante para guardar un apellido
define('APELLIDO', 'Herrera');

# Constante para guardar la edad
define('EDAD', 30);

# Imprimiendo las constantes

# Aqui para imprimir los tres datos en un solo mensaje hemos concatenado las constantes
echo 'El nombre del usuario es '.NOMBRE .' y su apellido es ' .APELLIDO .' y su edad es ' .EDAD;

/*
Concatenacion de constantes:
Para concatenar constantes se usa el punto '.'.
Esto nos permite unir dos o mas cadenas de texto en una sola.
Asi mostrar un mensaje con varias constantes.
Ejemplo:
echo 'La constante 1 es: '.CONSTANTE1 .' y la constante 2 es: ' .CONSTANTE2 .' y la constante 3 es: ' .CONSTANTE3;
 */

# Ejemplo de constantes con la palabra reservada const
const NOMBRE_COMPLETO = 'Juan Perez Herrera';
const EDAD_USUARIO = 29;

# Imprimiendo las constantes
echo '<br>';
echo 'El nombre completo del usuario es '.NOMBRE_COMPLETO .' y su edad es ' .EDAD_USUARIO;

/*
 Al igual que con las variables, existen constantes predefinidas en php.
 Estas constantes predefinidas son proporcionadas por php y no necesitan ser definidas por el usuario.
 Algunas de las constantes predefinidas más comunes son:

1. __LINE__: Devuelve el número de línea actual en el archivo.
2. __FILE__: Devuelve la ruta completa del archivo.
3. __DIR__: Devuelve el directorio del archivo.
4. __FUNCTION__: Devuelve el nombre de la función.
5. __CLASS__: Devuelve el nombre de la clase.
6. __METHOD__: Devuelve el nombre del método.
7. __NAMESPACE__: Devuelve el nombre del espacio de nombres.
8. PHP_VERSION: Devuelve la versión de php.
9. PHP_OS: Devuelve el sistema operativo en el que se está ejecutando php.
10. PHP_INT_MAX: Devuelve el valor máximo de un entero.
11. PHP_INT_MIN: Devuelve el valor mínimo de un entero.
12. PHP_INT_SIZE: Devuelve el tamaño de un entero en bytes.
13. PHP_FLOAT_DIG: Devuelve el número de dígitos decimales que puede representar un número flotante.
14. PHP_FLOAT_EPSILON: Devuelve el valor más pequeño que se puede representar en un número flotante.
15. PHP_FLOAT_MIN: Devuelve el valor más pequeño que se puede representar en un número flotante.
16. PHP_FLOAT_MAX: Devuelve el valor más grande que se puede representar en un número flotante.
17. PHP_ROUND_HALF_UP: Redondea hacia arriba los valores a medio camino.
18. __TRAIT__: Devuelve el nombre del trait.
19. __ClassName::class: Devuelve el nombre de la clase.
 */

# Desde php 7 podemos definir constantes de array

# Definimos una constante de array
define('PUTAS', array('puta1', 'puta2', 'puta3')); # Ya ustedes le ponen el nombre
const COLORES = array('rojo', 'azul', 'verde');

echo '<br>'; # con esto hacemos un salto de linea
echo 'La primera puta del array de putas es: '.PUTAS[0] .'<br>'.' y el primer color del array de colores es: ' .COLORES[0];