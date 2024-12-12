<?php

/*
Arreglos en php: Un array en php es un tipo especial de datos que representa los llamados
mapas ordenados de datos. Es decir, un array es una colección de datos que se almacenan
en una sola variable. Cada elemento de un array tiene un índice que lo identifica.
Tambien conocido o llamado como 'Array asociativo'.

Los valores que almacena un array no tienen que ser del mismo tipo, es decir, un array
puede contener valores de diferentes tipos.

La posibilidad de utilizar como valores de un array de otros arrays, árboles,
les permite la definicion de arrays multidimensionales.

Para acceder a un elemento de un array se usa el índice del elemento.

Php soporta tanto arrays escalares(indexados) como arrays asociativos(indexados por cadenas(clave)).
Y arrays multidimensionales.

Accedemos a los elementos de un array usando [] dentro del cual se coloca el índice o clave del elemento.

Php a diferencia de otros lenguajes no hace falta definir el array antes de utilizarlo.
Cuando se definen elementos de un array, php reconoce automaticamente que se trata de un array.

Tipos de arrays en php:

1.Escalares: Son aquellos que tienen un índice numérico.
    Ejemplo: $nombres = ['Juan', 'Pedro', 'Enrique', 'Manuel', 'Gilberto'];
    Si queremos acceder al elemento 'Pedro' del array $nombres, usamos el índice 1.
    echo $nombres[1]; // Pedro
2.Asociativos: Son aquellos que tienen un índice de cadena.
    Ejemplo: $datos = ['nombre' => 'Juan', 'apellido' => 'Perez', 'edad' => 30];
    Si queremos acceder al elemento 'Perez' del array $datos, usamos la clave 'apellido'.
    echo $datos['apellido']; // Perez
3.Multidimensionales: Son aquellos que tienen un índice numérico y un índice de cadena.
    Ejemplo: $usuarios = [
        ['nombre' => 'Juan', 'apellido' => 'Perez', 'edad' => 30],
        ['nombre' => 'Pedro', 'apellido' => 'Herrera', 'edad' => 25],
        ['nombre' => 'Enrique', 'apellido' => 'Gilberto', 'edad' => 35]
    ];
    Si queremos acceder al elemento 'Herrera' del array $usuarios, usamos el índice 1 y la clave 'apellido'.
    echo $usuarios[1]['apellido']; // Herrera

Como definimos estos:

1. Funcion array: Es la forma mas comun de definir un array en php.
    Sintaxis:
    $nombreArray = array(valor1, valor2, valor3, valor4, valor5);
    Ejemplo:
    $nombres = array('Juan', 'Pedro', 'Enrique', 'Manuel', 'Gilberto');

2. []: Apartir de php 5.4 se puede definir un array usando [].
    Sintaxis:
    $nombreArray = [valor1, valor2, valor3, valor4, valor5];
    Ejemplo:
    $nombres = ['Juan', 'Pedro', 'Enrique', 'Manuel', 'Gilberto'];
*/

# Array escalar definido con la función array
$putas_nuevas = array('putaNueva1', 'putaNueva2', 'putaNueva3', 'putaNueva4');
# Para modificar un elemento de un array se usa el índice del elemento:
$putas_nuevas[0] = 'Enriqueta Olivares';

# Array escalar definido con []
$mujeresDeVidaAlegre = ['puta1', 'puta2', 'puta3', 'puta4'];
$mujeresDeVidaAlegre[3] = 'Manuela Juanes';

# Quiero conocer a la primera puta nueva, como hago ? :v
echo 'La puta nueva es: ' . $putas_nuevas[0];

# Quiero conocer a la cuarta mujer de ña vida alegre, como hago ? :v
echo '<br>';
echo 'La cuarta mujer de vida alegre es: ' . $mujeresDeVidaAlegre[3];

# Nos quedaremos con la forma más reciente de definir arrays '[]'.

# Definimos un array asociativo
$datosPersonales = [
    'nombre' => 'Juan',
    'apellido' => 'Perez',
    'edad' => 30
];

# Para modificar un elemento de un array asociativo se usa la clave del elemento:
$datosPersonales['nombre'] = 'Enrique';

# Quiero conocer el apellido de la persona, como hago ? :v
echo '<br>';
echo 'El apellido de la persona es: ' . $datosPersonales['apellido'];

# Quiero saber la edad de la persona, como hago ? :v

echo '<br>';
# A ver, han aprendido algo ? :v

# Definimos un array multidimensional
$datosPersonasDelSistema=[
    ['nombre' => 'Juan', 'apellido'=> 'Perez', 'edad'=> 30],
    ['nombre' => 'Pedro', 'apellido'=> 'Herrera', 'edad'=> 25],
    ['nombre' => 'Enrique', 'apellido'=> 'Gilberto', 'edad'=> 35]
];

# Modificamos el nombre de la segunnda persona del sistema
$datosPersonasDelSistema[1]['nombre'] = 'Enriqueta';

echo '<br>';
# Mostramos el nombre de la segunda persona del sistema
echo $datosPersonasDelSistema[1]['nombre'];
echo '<br>';

$datosMujeresVidaAlegre = [
  ['nombre' => 'puta1', 'apellido' => 'puta1', 'edad' => 30, 'horarios' => ['04:00', '00:00', '11:00']],
  ['nombre' => 'puta2', 'apellido' => 'puta2', 'edad' => 25, 'horarios' => ['9:00', '13:00', '17:00']],
  ['nombre' => 'puta3', 'apellido' => 'puta3', 'edad' => 35, 'horarios' => ['10:00', '14:00', '18:00']]
];

# Modificamos el nombre de la primera mujer de vida alegre
$datosMujeresVidaAlegre[0]['nombre'] = 'Altagracia';
# Como le modifico el apellido? :v

echo '<br>';
# Mostramos toda la informacion de la primera mujer de vida alegre
print_r($datosMujeresVidaAlegre[0]);

# Quiero saber la edad de la segunda mujer de vida alegre, como hago ? :v


# Quiero saber los horarios de la tercera mujer de vida alegre, como hago ? :v

/*
 * Consejo:
 Pueden usar echo o alguna de las opciones de 'print' para mostrar la información de los arrays.
*/



// Explicación sobre el uso de las funciones de salida en PHP: print_r(), print y printf().

/*
1. print_r():
   Esta función se utiliza para mostrar información sobre una variable de manera legible, especialmente útil para estructuras complejas como arrays y objetos.
   - Sintaxis:
     print_r(mixed $variable [, bool $return = false])
   - Parámetros:
     - $variable: La variable (array, objeto, etc.) que se desea mostrar.
     - $return (opcional): Si es true, devuelve el resultado como cadena en lugar de imprimirlo.
   - Ejemplo:
     print_r($datosPersonasDelSistema);

2. print:
   Es una construcción del lenguaje que permite mostrar datos simples como cadenas y valores escalares. Es similar a `echo`, pero devuelve el valor 1.
   - Sintaxis:
     print(string $texto)
   - Parámetro:
     - $texto: El texto o cadena que deseas imprimir.
   - Ejemplo:
     print("Hola, mundo!");

3. printf:
   Permite imprimir datos formateados, reemplazando marcadores en una cadena con valores dinámicos. Es útil para crear salidas elegantes y organizadas.
   - Sintaxis:
     printf(string $formato, mixed ...$valores)
   - Parámetros:
     - $formato: Una cadena que contiene marcadores como %s, %d, %f, etc., que serán reemplazados.
     - ...$valores: Los valores que reemplazarán los marcadores en la cadena.
   - Ejemplo:
     printf("Hola, %s. Tienes %d años.", $nombre, $edad);

Poniendo a prueba las funciones con una estructura de ejemplo:
*/

# Usando print_r() para mostrar la estructura del array.
echo "Usando print_r:";
echo '<br>';
print_r($datosPersonasDelSistema);

echo "<br><br>";
# Usando printf() (en este caso no es adecuado para arrays, así que usamos un mensaje simple).
echo "Usando printf:";
echo '<br>';
/*
Esta línea utiliza printf para imprimir un mensaje formateado con el número de personas registradas en el sistema.

Detalles:
- "El sistema tiene información sobre %d personas." es la cadena de formato.
  - %d: Es un especificador de formato que será reemplazado por un número entero.
- count($datosPersonasDelSistema): Esta función calcula cuántos elementos hay en el array $datosPersonasDelSistema.

Ejemplo:
Si $datosPersonasDelSistema contiene 3 elementos, la salida será:
"El sistema tiene información sobre 3 personas."
*/
printf("El sistema tiene información sobre %d personas.", count($datosPersonasDelSistema));
echo '<br><br>';
/*
Para contar en el array multidimensional $datosMujeresVidaAlegre, se puede usar la función count() de la siguiente manera, agregando COUNT_RECURSIVE como segundo argumento para contar todos los elementos de los subarrays:
printf("El sistema tiene información sobre %d mujeres de vida alegre.", count($datosMujeresVidaAlegre, COUNT_RECURSIVE));
*/
printf("El sistema tiene información tiene  %d elementos sobre mujeres de la vida alegre.", count($datosMujeresVidaAlegre, COUNT_RECURSIVE));


echo "<br><br>";
echo "Usando print:";
echo '<br>';
print("Esta es una demostración del uso de funciones de salida en PHP.");