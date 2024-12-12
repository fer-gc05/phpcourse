<?php

/*
Las funciones en PHP son bloques de código que se pueden reutilizar en diferentes partes de un programa.
Estas funciones pueden recibir parámetros y devolver un valor.

Para definir una función en PHP, se utiliza la palabra clave function seguida del nombre de la función y los paréntesis que pueden contener los parámetros de la función.

Ejemplo de una función que suma dos números:

function sumar($a, $b) {
    return $a + $b;
}

En este ejemplo, la función sumar recibe dos parámetros $a y $b, y devuelve la suma de los dos números.

Para llamar a una función en PHP, se utiliza el nombre de la función seguido de los paréntesis que pueden contener los argumentos de la función.

Ejemplo de cómo llamar a la función sumar:

$resultado = sumar(5, 3);

En este ejemplo, se llama a la función sumar con los argumentos 5 y 3, y el resultado se almacena en la variable $resultado.
*/

# Ejemplo de función que suma dos números
function sumar($a, $b) {
    return $a + $b;
}

# Ejemplo de función que resta dos números
function restar($a, $b) {
    return $a - $b;
}

# Ejemplo de función que multiplica dos números
function multiplicar($a, $b) {
    return $a * $b;
}

# Ejemplo de función que divide dos números
function dividir($a, $b) {
    return $a / $b;
}

# Funcion que determina si un numero es positivo, negativo o cero
function determinarNumero($numero) {
    if ($numero > 0) {
        return "El número es positivo";
    } elseif ($numero < 0) {
        return "El número es negativo";
    } else {
        return "El número es cero";
    }
}

# Funcion saludo
function saludar($nombre) {
    return "Hola, $nombre!";
}

# Para llamar a una función, se utiliza el nombre de la función seguido de los paréntesis que pueden contener los argumentos de la función.

# Ejemplo de cómo llamar a la función sumar
$resultado = sumar(5, 3);
echo 'Suma: '.$resultado; # Salida: 8
echo '<br><br>';

# Ejemplo de cómo llamar a la función restar
$resultado = restar(5, 3);
echo 'Resta: '.$resultado; # Salida: 2
echo '<br><br>';

# Ejemplo de cómo llamar a la función multiplicar
$resultado = multiplicar(5, 3);
echo 'Multiplicación: '.$resultado; # Salida: 15
echo '<br><br>';

# Ejemplo de cómo llamar a la función dividir
$resultado = dividir(6, 3);
echo 'División: '.$resultado; # Salida: 2
echo '<br><br>';

# Ejemplo de cómo llamar a la función determinarNumero
$resultado = determinarNumero(-5);
echo $resultado; # Salida: El número es negativo
echo '<br><br>';

# Ejemplo de cómo llamar a la función saludar
echo saludar('Juan'); # Salida: Hola, Juan!
echo '<br><br>';

# Ejercicio


