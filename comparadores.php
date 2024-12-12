<?php
# Operadores de Comparación en PHP
# Herramientas para comparar valores y determinar relaciones entre datos

# 1. Operador de Igualdad (==)
# Compara valores con conversión de tipo
$a = 5;     # Entero
$b = "5";   # Cadena
var_dump($a == $b);  # Devuelve true (compara solo el valor)

# 2. Operador de Identidad (===)
# Compara valor y tipo de dato estrictamente
$c = 5;     # Entero
$d = "5";   # Cadena
var_dump($c === $d);  # Devuelve false (compara valor y tipo)

# 3. Operador de Desigualdad (!=)
# Verifica si los valores son diferentes
$x = 10;
$y = 20;
var_dump($x != $y);  # Devuelve true

# 4. Operador de Desidentidad (!==)
# Comprueba diferencia en valor o tipo
$m = 5;
$n = "5";
var_dump($m !== $n);  # Devuelve true

# 5. Operadores de Comparación Mayor/Menor
$p = 15;
$q = 10;

var_dump($p > $q);   # Mayor que
var_dump($p < $q);   # Menor que
var_dump($p >= $q);  # Mayor o igual que
var_dump($p <= $q);  # Menor o igual que

# 6. Comparación de Cadenas
$str1 = "hola";
$str2 = "mundo";
var_dump($str1 < $str2);  # Comparación lexicográfica

# 7. Comparación con null
$var = null;
var_dump($var == null);   # Verdadero
var_dump($var === null);  # También verdadero

# Ejemplos de comparaciones
$comparacion1 = 5 == "5";     # true
$comparacion2 = 5 === "5";    # false
$comparacion3 = 0 == false;   # true
$comparacion4 = 0 === false;  # false

# Salida de resultados
echo $comparacion1;
echo $comparacion2;
echo $comparacion3;
echo $comparacion4;