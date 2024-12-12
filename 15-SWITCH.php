<?php

/*
La sentencia switch es una alternativa a los condicionales anidados.
Es una estructura de control que permite evaluar una variable y compararla con múltiples valores.
Es similar a una serie de condicionales if anidados, pero mucho más limpia y fácil de leer.
La sintaxis de la sentencia switch es la siguiente:

switch(variable){
    case valor1:
        // Código a ejecutar si la variable es igual a valor1
        break;
    case valor2:
        // Código a ejecutar si la variable es igual a valor2
        break;
    case valor3:
        // Código a ejecutar si la variable es igual a valor3
        break;
    default:
        // Código a ejecutar si la variable no coincide con ninguno de los valores anteriores
        break;
}

La sentencia switch evalúa la variable y compara su valor con los valores de los casos (case).
Si la variable coincide con un caso, se ejecuta el código correspondiente y se sale de la sentencia switch con la palabra clave break.
Si la variable no coincide con ningún caso, se ejecuta el código del caso default (opcional) y se sale de la sentencia switch con la palabra clave break.

Ejemplo:

$dia = "Lunes";

switch($dia){
    case "Lunes":
        echo "Hoy es Lunes";
        break;
    case "Martes":
        echo "Hoy es Martes";
        break;
    case "Miércoles":
        echo "Hoy es Miércoles";
        break;
    default:
        echo "Hoy no es ninguno de los días anteriores";
        break;
}
*/

$fruta = "Manzana";

switch ($fruta){
    case "Manzana":
        echo "La fruta es una Manzana";
        break;
    case "Pera":
        echo "La fruta es una Pera";
        break;
    case "Plátano":
        echo "La fruta es un Plátano";
        break;
    default:
        echo "La fruta no es ninguna de las anteriores";
        break;
}

/*
Ejercicio:

Verifiquen que al establecer el nombre de un objeto  de un hogar, se muestre un mensaje que diga
"Has elegido un objeto de la cocina" si el objeto es una "Cuchara",
"Has elegido un objeto de la sala" si el objeto es un "Sofá",
"Has elegido un objeto del baño" si el objeto es un "Cepillo de dientes"
y "No tenemos información sobre ese objeto" si el objeto no es ninguno de los anteriores.
*/

