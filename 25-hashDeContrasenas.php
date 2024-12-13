<?php

/*
En php podemos usar funciones criptográficas para generar hashes de contraseñas seguras. La función password_hash() se utiliza para generar un hash seguro de una contraseña. La sintaxis de la función password_hash() es la siguiente:

password_hash(password, algoritmo, opciones)
password: especifica la contraseña que se va a hashear.
algoritmo: especifica el algoritmo de hash a utilizar. Puede ser uno de los siguientes valores:
PASSWORD_DEFAULT: algoritmo de hash predeterminado (actualmente BCRYPT).
PASSWORD_BCRYPT: algoritmo de hash BCRYPT.
PASSWORD_ARGON2I: algoritmo de hash ARGON2I.
PASSWORD_ARGON2ID: algoritmo de hash ARGON2ID.
opciones (opcional): especifica un array de opciones adicionales para el algoritmo de hash.

La forma más segura de generar hashes de contraseñas en php es utilizando el algoritmo BCRYPT o ARGON2I. Estos algoritmos son resistentes a los ataques de fuerza bruta y a los ataques de diccionario

Ejemplo:

$password = 'password123';
$hash = password_hash($password, PASSWORD_DEFAULT); // Hash con algoritmo predeterminado
md5() y sha1() son algoritmos de hash más antiguos y menos seguros que BCRYPT y ARGON2I. Se recomienda utilizar BCRYPT o ARGON2I para generar hashes de contraseñas seguras.

Ejemplo:

$password = 'password123';
$hash = md5($password); // Hash con md5
$hash = sha1($password); // Hash con sha1
*/

# Ejemplo
$password = 'password123';

# Hash con md5

$hash = md5($password);
echo "Hash con md5: $hash\n";
echo '<br><br>';

# Hash con sha1
$hash = sha1($password);
echo "Hash con sha1: $hash\n";
echo '<br><br>';

# Hash con password_hash()
$hash = password_hash($password, PASSWORD_BCRYPT);
echo "Hash con password_hash(): $hash\n";
echo '<br><br>';

/*
 Para comparar una contraseña con un hash generado con password_hash(), se puede utilizar la función password_verify(). La función password_verify() verifica si una contraseña coincide con un hash generado previamente. La sintaxis de la función password_verify() es la siguiente:

 password_verify(password, hash)
 password: especifica la contraseña a verificar.
 hash: especifica el hash generado previamente.

Ejemplo:

$password = 'password123';
$hash = password_hash($password, PASSWORD_DEFAULT);

$isCorect = password_verify($password, $hash) ? 'La contraseña es validad ' : 'La contraseña no es  valida';
echo $isCorect;
echo '<br><br>';

*/

$password = 'password123';
$hash = password_hash($password, PASSWORD_ARGON2I);

$isCorect = password_verify($password, $hash) ? 'La contraseña es validad ' : 'La contraseña no es  valida';
echo $isCorect;
echo '<br><br>';

/*
Ejercicio:
Generar un hash de la contraseña 'password123' utilizando el algoritmo BCRYPT y verificar si la contraseña es válida utilizando la función password_verify().
*/


