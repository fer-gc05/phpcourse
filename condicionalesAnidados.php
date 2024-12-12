<?php

/*
Los condicionales anidados son aquellos que se encuentran dentro de otro condicional.
Esto se puede hacer de manera indefinida, es decir, se pueden anidar tantos condicionales como se necesiten.

Ejemplo:

if(condicion1){
    if(condicion2){
        // Código a ejecutar si se cumple la condición 2
    }
    else{
        // Código a ejecutar si no se cumple la condición 2
    }
}
else{
    // Código a ejecutar si no se cumple la condición 1
}
*/

$edad = 18;
$nombre = "Juan";

if($edad >= 18){
    if($nombre == "Juan"){
        echo "Bienvenido Juan, eres mayor de edad";
    }
    else{
        echo "No eres Juan, pero eres mayor de edad";
    }
}
else{
    echo "Eres menor de edad";
}

/*
Ejercicio:

Crear un programa que solicite al usuario la marca de un coche y el modelo.
Si el coche es de la marca "Ford" y el modelo es "Fiesta", mostrar un mensaje que diga "Has elegido un Ford Fiesta".
Si el coche es de la marca "Chevrolet" y el modelo es "Camaro", mostrar un mensaje que diga "Has elegido un Chevrolet Camaro".
Si el coche es de la marca "Toyota" y el modelo es "Corolla", mostrar un mensaje que diga "Has elegido un Toyota Corolla".
Si el coche no es de ninguna de las marcas anteriores, mostrar un mensaje que diga "No tenemos información sobre ese coche".
Ademas si el coche es una de las marcas anteriores y el modelo no es el correcto, mostrar un mensaje que diga "El modelo no es correcto".
*/
