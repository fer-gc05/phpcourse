<?php

/*
Condicionales en PHP
Los condicionales son estructuras de control que nos permiten tomar decisiones en un programa. En PHP, al igual que en otros lenguajes de programación, los condicionales se implementan mediante las instrucciones if, elseif y else.

La instrucción if
La instrucción if se utiliza para ejecutar un bloque de código si una condición es verdadera. La sintaxis de la instrucción if es la siguiente:

if (condición) {
    // código a ejecutar si la condición es verdadera
}

La condición es una expresión que se evalúa como verdadera o falsa. Si la condición es verdadera, se ejecuta el bloque de código que se encuentra entre las llaves { y }. Si la condición es falsa, el bloque de código no se ejecuta.

Ejemplo:

<?php
$edad = 18;

if ($edad >= 18) {
    echo "Eres mayor de edad";
}
?>

En este ejemplo, la variable $edad tiene un valor de 18. La condición $edad >= 18 se evalúa como verdadera, por lo que se imprime el mensaje "Eres mayor de edad".

La instrucción else
La instrucción else se utiliza para ejecutar un bloque de código si la condición de un if es falsa. La sintaxis de la instrucción else es la siguiente:

if (condición) {
    // código a ejecutar si la condición es verdadera
} else {
    // código a ejecutar si la condición es falsa
}

Ejemplo:

<?php
$edad = 16;

if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}

En este ejemplo, la variable $edad tiene un valor de 16. La condición $edad >= 18 se evalúa como falsa, por lo que se imprime el mensaje "Eres menor de edad".

La instrucción elseif
La instrucción elseif se utiliza para evaluar múltiples condiciones en un if. La sintaxis de la instrucción elseif es la siguiente:

if (condición1) {
    // código a ejecutar si la condición1 es verdadera
} elseif (condición2) {
    // código a ejecutar si la condición2 es verdadera
} else {
    // código a ejecutar si ninguna de las condiciones anteriores es verdadera
}

Ejemplo:

<?php
$edad = 16;

if ($edad >= 18) {
    echo "Eres mayor de edad";
} elseif ($edad >= 13) {
    echo "Eres adolescente";
} else {
    echo "Eres niño";
}

En este ejemplo, la variable $edad tiene un valor de 16. La condición $edad >= 18 se evalúa como falsa, por lo que se evalúa la siguiente condición $edad >= 13, que se evalúa como verdadera. Por lo tanto, se imprime el mensaje "Eres adolescente".

Operadores de comparación
En las condiciones de los condicionales se pueden utilizar los siguientes operadores de comparación:

Operador	Descripción
==	Igual a
!=	Diferente de
<	Menor que
>	Mayor que
<=	Menor o igual que
>=	Mayor o igual que
&&	Y lógico
||	O lógico
!	No lógico
Ejemplo:

<?php
$numero = 10;

if ($numero == 10) {
    echo "El número es igual a 10";
}

if ($numero != 5) {
    echo "El número es diferente de 5";
}

if ($numero < 20) {
    echo "El número es menor que 20";
}

if ($numero > 5) {
    echo "El número es mayor que 5";
}

if ($numero <= 10) {
    echo "El número es menor o igual que 10";
}

if ($numero >= 10) {
    echo "El número es mayor o igual que 10";
}

if ($numero == 10 && $numero < 20) {
    echo "El número es igual a 10 y menor que 20";
}

if ($numero == 5 || $numero == 10) {
    echo "El número es igual a 5 o igual a 10";
}

if (!($numero == 5)) {
    echo "El número no es igual a 5";
}

En este ejemplo, la variable $numero tiene un valor de 10. Se utilizan los operadores de comparación para evaluar diferentes condiciones y se imprimen los mensajes correspondientes según el resultado de cada condición.

Ejercicio
Escribe un programa en PHP que determine si un número es positivo, negativo o cero. El programa debe imprimir un mensaje indicando el resultado.

Solución:

<?php

$numero = -5;

if ($numero > 0) {
    echo "El número es positivo";
} elseif ($numero < 0) {
    echo "El número es negativo";
} else {
    echo "El número es cero";
}

Ademas de esa sintaxis de if, elseif y else, también se puede utilizar la siguiente sintaxis:

if (condición) :
    // código a ejecutar si la condición es verdadera
elseif (condición) :
    // código a ejecutar si la condición es verdadera
else :
    // código a ejecutar si ninguna de las condiciones anteriores es verdadera
endif;
*/

# Ejemplo con extructura if

$edad = 18;

if ($edad >= 18) {
    echo "Eres mayor de edad";
}

# Ejemplo con extructura if else

$edad = 16;

if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}

# Ejemplo con extructura if elseif
$numero = -5;
if ($numero > 0) {
    echo "El número es positivo";
} elseif ($numero < 0) {
    echo "El número es negativo";
} else {
    echo "El número es cero";
}

# Ejemplo de sintaxis alternativa
$numero = 10;

# Sintaxis alternativa de if
if ($numero == 10) :
    echo "El número es igual a 10";
endif;

# Sintaxis alternativa de if else

if ($numero != 5) :
    echo "El número es diferente de 5";
else :
    echo "El número es igual a 5";
endif;

# Sintaxis alternativa de if elseif

if ($numero < 20) :
    echo "El número es menor que 20";
elseif ($numero > 20) :
    echo "El número es mayor que 20";
else :
    echo "El número es igual a 20";
endif;

/*
Ejercicio:

1. Calcular el total que una persona debe pagar en una llantera,
   el precio de la llanta es de $800.00 si la llanta es rin 13,
    $900.00 si la llanta es rin 14, $1,000.00 si la llanta es rin 15
    y $1,200.00 si la llanta es rin 16. La persona también debe pagar
    por la instalación de la llanta, si la instalación cuesta $100.00
    si la llanta es rin 13, $200.00 si la llanta es rin 14, $300.00 si
    la llanta es rin 15 y $400.00 si la llanta es rin 16. El programa
    debe imprimir el total a pagar por la persona.

*/
