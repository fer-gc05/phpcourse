<?php
/*
Para comprobar si una variable es vacía, es decir, si no tiene ningún valor, podemos utilizar la función empty() de PHP. Esta función devuelve true si la variable está vacía y false en caso contrario.
También podemos utilizar la función isset() para comprobar si una variable está definida y no es null.
Y por último, podemos utilizar la función is_null() para comprobar si una variable es null.

Con estas funciones se busca comprobar si una variable tiene algún valor asignado o no, y en función de ello, realizar una acción u otra.

Ejemplos:


- isset(): Comprueba si una variable está definida y no es null.
$variable = "Hola mundo";
if(isset($variable)){
    echo "La variable está definida y no es null";
} else {
    echo "La variable no está definida o es null";
}

- empty(): Comprueba si una variable está vacía.
$variable = "";
if(empty($variable)){
    echo "La variable está vacía";
} else {
    echo "La variable no está vacía";
}

- is_null(): Comprueba si una variable es null.

$variable = null;
if(is_null($variable)){
    echo "La variable es null";
} else {
    echo "La variable no es null";
}

En estos ejemplos, se muestra cómo utilizar las funciones isset(), empty() e is_null() para comprobar si una variable está definida, vacía o es null, respectivamente.
*/

# Ejemplo 1 isset()
$variable = "";
if(isset($variable)){
    echo "La variable está definida y no es null";
} else {
    echo "La variable no está definida o es null";
}

echo  '<br>';

# Ejemplo 2 empty()

$variable = "";
if(empty($variable)){
    echo "La variable está vacía";
} else {
    echo "La variable no está vacía";
}

echo  '<br>';

# Ejemplo 3 is_null()

$variable = '';
if(is_null($variable)){
    echo "La variable es null";
} else {
    echo "La variable no es null";
}
