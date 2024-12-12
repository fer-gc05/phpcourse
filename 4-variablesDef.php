<?php
#Carga los posibles errores de php
ini_set('display_errors', 1); # Activa los errores para que se muestren en pantalla

/*
Una variable es un espacio en memoria que se utiliza para almacenar un valor.
En php se representan con el signo de dólar '$' seguido de un nombre de variable.
Las variables en php son sensibles a mayúsculas y minúsculas.
Y no pueden empezar con un número.
Ademas su valor puede cambiar durante la ejecución del script.
*/

# Ejemplo de variables
# Todas las variables en php empiezan con el signo de dólar '$'
# Y no pueden empezar con un número
# Puede empezar con una letra o un guión bajo '_'

$nombre = 'Juan';

# Las Variables son sensibles a mayúsculas y minúsculas

# Imprimiendo el valor de las variables
echo $nombre;

$_Tate = 'Tate';


# Imprimiendo el valor de las variables
echo '<br>';
echo $_Tate;

/*
Como una buena practica podemos seguir estándares de nomenclatura.
Estos son un conjunto de normas para un lenguaje de programacion que se
recomienda usar como buenas practicas para escribir código limpio y legible.

1. Camel Case: Escribir las palabras compuestas o frases, donde cada palabra, excepto la primera, comienza con una letra mayúscula.
   Busca asemejar el nombre de la variable a una joroba de camello.
   Ejemplo: $nombreUsuario, $nombreCompleto, $nombreDeUsuario.

1.1. Upper Camel Case: Escribir las palabras compuestas o frases, donde cada palabra, excepto la primera, comienza con una letra mayúscula.
   Ejemplo: $NombreUsuario, $NombreCompleto, $NombreDeUsuario.

1.2. Lower Camel Case: Escribir las palabras compuestas o frases, donde cada palabra, excepto la primera, comienza con una letra mayúscula.
   Ejemplo: $nombreUsuario, $nombreCompleto, $nombreDeUsuario.

2. Uper Case: Escribir todas las letras de una palabra en mayúsculas.
   Ejemplo: $NOMBREUSUARIO, $NOMBRECOMPLETO, $NOMBREDEUSUARIO.

3. Snake Case: Escribir las palabras compuestas o frases, donde cada palabra se separa con un guión bajo '_'.
   Ejemplo: $nombre_usuario, $nombre_completo, $nombre_de_usuario.

3.1. SCREAMING_SNAKE_CASE: Escribir las palabras compuestas o frases, donde cada palabra se separa con un guión bajo '_'.
   Ejemplo: $NOMBRE_USUARIO, $NOMBRE_COMPLETO, $NOMBRE_DE_USUARIO.
*/

# Ejemplo de variables con camel case
$nombreCompleto = 'Juan Perez';

# Ejemplo de variables con upper camel case
$NombreCompleto = 'Juan Gilberto Perez';

# Ejemplo de variables con lower camel case
$nombreDeUsuario = 'Juan Perez Herrera';

# Ejemplo de variables con upper case
$NOMBRECOMPLETO = 'Juan Gilberto Perez Herrera';

# Ejemplo de variables con snake case
$nombre_completo = 'Enrique Gilberto Perez Herrera';

# Ejemplo de variables con screaming snake case
$NOMBRE_COMPLETO = 'Enrique Manuel Perez Herrera';

/*
En php existen variables predefinidas que son variables que ya vienen definidas por el lenguaje.
Estas variables se conocen como variables superglobales y se pueden acceder desde cualquier parte del script.
Estas variables se representan con un guión bajo seguido de una palabra en mayúsculas.
Algunas de las variables superglobales más comunes son:
1. $_SERVER: Contiene información del servidor y del entorno de ejecución.
2. $_GLOBALS: Contiene todas las variables globales.
3. $_REQUEST: Contiene información de las variables de petición HTTP.
4. $_POST: Contiene información de las variables POST.
5. $_GET: Contiene información de las variables GET.
6. $_FILES: Contiene información de los archivos subidos al servidor.
7. $_ENV: Contiene información de las variables de entorno.
8. $_COOKIE: Contiene información de las cookies.
9. $_SESSION: Contiene información de las sesiones.
10. $_ENV: Contiene información de las variables de entorno.
11. $php_errormsg: Contiene el mensaje de error de la última función de error.
12. $HTTP_RAW_POST_DATA: Contiene datos sin procesar de la petición HTTP.
13. $http_response_header: Contiene información de cabeceras de respuesta HTTP.
14. $argc: Contiene el número de argumentos pasados al script.
15. $argv: Contiene un array de argumentos pasados al script.
16. $this: Contiene una referencia al objeto actual, usualmente se usa en clases. (POO)
 */

/*Una variable se puede modificar, es decir podemmos cambiar su valor durante la ejecucion.*/
# Definimos la variable edad con un valor de 20
$edad = 20;
# Modificamos el valor de la variable edad
$edad = 23;
$edad = 30;
echo '<br>';

# Imprimimos el valor de la variable edad
echo  'La edad del usuario es: '. $edad;