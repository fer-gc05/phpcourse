<?php

/*
En php contamos con una serie de funciones matemáticas que nos permiten realizar operaciones matemáticas de forma sencilla.

Algunas de las funciones matemáticas más comunes en PHP son:

1. abs(): Devuelve el valor absoluto de un número.
2. sqrt(): Devuelve la raíz cuadrada de un número.
3. pow(): Devuelve el resultado de elevar un número a una potencia.
4. round(): Redondea un número al entero más cercano.
5. ceil(): Redondea un número hacia arriba.
6. floor(): Redondea un número hacia abajo.
7. rand(): Genera un número entero aleatorio.
8. min(): Devuelve el valor mínimo de un conjunto de números.
9. max(): Devuelve el valor máximo de un conjunto de números.
10. sin(): Devuelve el seno de un ángulo en radianes.
11. cos(): Devuelve el coseno de un ángulo en radianes.
12. tan(): Devuelve la tangente de un ángulo en radianes.
13. asin(): Devuelve el arco seno de un número.
14. acos(): Devuelve el arco coseno de un número.
15. atan(): Devuelve el arco tangente de un número.
16. log(): Devuelve el logaritmo natural de un número.
17. exp(): Devuelve el valor de e elevado a la potencia de un número.
18. pi(): Devuelve el valor de pi (π).
19. deg2rad(): Convierte un ángulo de grados a radianes.
20. rad2deg(): Convierte un ángulo de radianes a grados.
21. hypot(): Devuelve la longitud de la hipotenusa de un triángulo rectángulo.
22. fmod(): Devuelve el resto de la división de dos números en punto flotante.
23. is_finite(): Comprueba si un número es finito.
24. is_infinite(): Comprueba si un número es infinito.
25. is_nan(): Comprueba si un valor no es un número.
26. lcg_value(): Devuelve un número aleatorio de punto flotante entre 0 y 1.
27. mt_rand(): Genera un número entero aleatorio usando el generador de números aleatorios Mersenne Twister.
28. mt_getrandmax(): Devuelve el valor máximo que puede generar mt_rand().
29. deg2grad(): Convierte un ángulo de grados a gradianes.
30. grad2deg(): Convierte un ángulo de gradianes a grados.
31. acosh(): Devuelve el coseno hiperbólico inverso de un número.
32. asinh(): Devuelve el seno hiperbólico inverso de un número.
33. atanh(): Devuelve la tangente hiperbólica inversa de un número.
34. cosh(): Devuelve el coseno hiperbólico de un número.
35. sinh(): Devuelve el seno hiperbólico de un número.
36. tanh(): Devuelve la tangente hiperbólica de un número.
37. log10(): Devuelve el logaritmo en base 10 de un número.
38. log1p(): Devuelve el logaritmo natural de 1 más un número.
39. expm1(): Devuelve e elevado a la potencia de un número menos uno.
*/

# Ejemplo de uso de funciones matemáticas en PHP

# Valor absoluto de un número
$numero = -10;
echo 'Valor absoluto: ' . abs($numero); # Salida: 10
echo '<br><br>';

# Raíz cuadrada de un número
$numero = 16;
echo 'Raíz cuadrada: ' . sqrt($numero); # Salida: 4
echo '<br><br>';

# Potencia de un número
$base = 2;
$exponente = 3;
echo 'Potencia: ' . pow($base, $exponente); # Salida: 8
echo '<br><br>';

# Redondeo de un número
$numero = 3.7;
echo 'Redondeo: ' . round($numero); # Salida: 4
echo '<br><br>';

# Redondeo hacia arriba
$numero = 3.2;
echo 'Redondeo hacia arriba: ' . ceil($numero); # Salida: 4
echo '<br><br>';

# Redondeo hacia abajo
$numero = 3.9;
echo 'Redondeo hacia abajo: ' . floor($numero); # Salida: 3
echo '<br><br>';

# Número aleatorio
echo 'Número aleatorio: ' . rand(1, 10); # Salida: un número aleatorio entre 1 y 10
echo '<br><br>';

# Valor mínimo
echo 'Valor mínimo: ' . min(1, 2, 3, 4, 5); # Salida: 1
echo '<br><br>';

# Valor máximo
echo 'Valor máximo: ' . max(1, 2, 3, 4, 5); # Salida: 5
echo '<br><br>';

# Seno de un ángulo
$angulo = 90;
echo 'Seno: ' . sin(deg2rad($angulo)); # Salida: 1
echo '<br><br>';

# Coseno de un ángulo
$angulo = 0;
echo 'Coseno: ' . cos(deg2rad($angulo)); # Salida: 1
echo '<br><br>';

# Tangente de un ángulo
$angulo = 45;
echo 'Tangente: ' . tan(deg2rad($angulo)); # Salida: 1
echo '<br><br>';

# Logaritmo natural
$numero = 10;
echo 'Logaritmo natural: ' . log($numero); # Salida: 2.302585092994
echo '<br><br>';

# Valor de pi
echo 'Valor de pi: ' . pi(); # Salida: 3.1415926535898
echo '<br><br>';

# Longitud de la hipotenusa
$cateto1 = 3;
$cateto2 = 4;
echo 'Hipotenusa: ' . hypot($cateto1, $cateto2); # Salida: 5
echo '<br><br>';

# Resto de la división de dos números en punto flotante
$dividendo = 10;
$divisor = 3;
echo 'Resto: ' . fmod($dividendo, $divisor); # Salida: 1
echo '<br><br>';

# Comprobación de si un número es finito
$numero = 10;
echo '¿Es finito?: ' . is_finite($numero); # Salida: 1 (true)
echo '<br><br>';

# Comprobación de si un número es infinito
$numero = 10;
echo '¿Es infinito?: ' . is_infinite($numero); # Salida: 0 (false)
echo '<br><br>';

# Número aleatorio de punto flotante entre 0 y 1
echo 'Número aleatorio: ' . lcg_value(); # Salida: un número aleatorio entre 0 y 1
echo '<br><br>';

# Número entero aleatorio usando el generador de números aleatorios Mersenne Twister
echo 'Número aleatorio: ' . mt_rand(1, 10); # Salida: un número aleatorio entre 1 y 10
echo '<br><br>';

# Valor máximo que puede generar mt_rand()
echo 'Valor máximo: ' . mt_getrandmax(); # Salida: 2147483647
echo '<br><br>';

# Coseno hiperbólico inverso de un número
$numero = 2;
echo 'Coseno hiperbólico inverso: ' . acosh($numero); # Salida: 1.3169578969248
echo '<br><br>';

# Seno hiperbólico inverso de un número
$numero = 2;
echo 'Seno hiperbólico inverso: ' . asinh($numero); # Salida: 1.4436354751788
echo '<br><br>';

# Coseno hiperbólico de un número
$numero = 2;
echo 'Coseno hiperbólico: ' . cosh($numero); # Salida: 3.7621956910836
echo '<br><br>';

# Seno hiperbólico de un número
$numero = 2;
echo 'Seno hiperbólico: ' . sinh($numero); # Salida: 3.626860407847
echo '<br><br>';

# Logaritmo en base 10 de un número
$numero = 100;
echo 'Logaritmo en base 10: ' . log10($numero); # Salida: 2
echo '<br><br>';

# Logaritmo natural de 1 más un número
$numero = 10;
echo 'Logaritmo natural de 1 más un número: ' . log1p($numero); # Salida: 2.3978952727984
echo '<br><br>';

# e elevado a la potencia de un número menos uno
$numero = 1;
echo 'e elevado a la potencia de un número menos uno: ' . expm1($numero); # Salida: 1.718281828459
echo '<br><br>';

# Convierte un ángulo de grados a radianes
$angulo = 90;
echo 'Conversión de grados a radianes: ' . deg2rad($angulo); # Salida: 1.5707963267949
echo '<br><br>';

# Convierte un ángulo de radianes a grados
$radianes = 1.5707963267949;
echo 'Conversión de radianes a grados: ' . rad2deg($radianes); # Salida: 90
echo '<br><br>';

/*
Ejericios:
1. Calcular el área de un círculo con radio de 5 cm.
2. Calcular el volumen de una esfera con radio de 10 cm.
3. Calcular el valor de x en la ecuación x^2 + 5x + 6 = 0.
*/

# Solución 1
$radio = 5;
$area = pi() * pow($radio, 2);
echo 'Área del círculo: ' . $area;
echo '<br><br>';
# Solución 2
$radio = 10;
$volumen = (4/3) * pi() * pow($radio, 3);
echo 'Volumen de la esfera: ' . $volumen;
echo '<br><br>';
# Solución 3
$a = 1;
$b = 5;
$c = 6;
$x1 = (-$b + sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);
$x2 = (-$b - sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);
echo 'Valor de x1: ' . $x1;
echo '<br><br>';


/*
Ejercicios para que realizen:
1. Calcular el área de un triángulo con base de 10 cm y altura de 5 cm.
2. Calcular el volumen de un cilindro con radio de 7 cm y altura de 15 cm.
3. Calcular el valor de x en la ecuación 2x^2 - 5x + 3 = 0.
*/

# Si quieren saber más se pueden diriguir a la documentación oficial de PHP en el siguiente enlace: https://www.php.net/manual/es/ref.math.php.